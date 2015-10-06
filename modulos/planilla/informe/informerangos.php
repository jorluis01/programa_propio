<?PHP
$fecha1=$_GET['fecha1'];
$fecha2=$_GET['fecha2'];

?>
<script src="../../../controllers/js/libs/jquery/jquery-1.4.2.min.js"></script>
<center> <form action="ficheroExcel.php?fecha1=<?php echo $fecha1; ?>&fecha2=<?php echo $fecha2; ?>" method="post" target="_blank" id="FormularioExportacion">
<p>Exportar a Excel  <img src="export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>
<div class="tipobodega" id="Exportar_a_Excel">
    <p style="text-align: center"><h1 style="text-align: center">PLANILLA REPORTE MOVIMIENTO DIARIO  </h1> </p>
    
       



<script language="javascript">
    
    
    
    
$(document).ready(function() {
    $(window).scroll(function()
		{
     if ($(this).scrollTop() > 50) $('nav').addClass("fixed").fadeIn();
     else $('nav').removeClass("fixed");
		});
    
    
    
    
    
    
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();
});
});
</script>

<table style=" height: 56px;" border="1"  >
      <tbody>
      <nav>
          <tr>
            <td style="width: 80px" ><center>FECHA</center></td>
          <td ><center>ID</center></td>   
         <td style="width: 50px"><center>REMISION NUMERO</center></td>
         <td ><center>T/V</center></td> 
         <td ><center>F/P</center></td> 
          <td ><center>ORIGEN</center></td>
          <td ><center>DESTINO</center></td>
          <td ><center>CLIENTE</center></td>
          <td ><center>PROD</center></td>
          <td ><center>V</center></td>
          <td ><center>M</center></td>
          <td ><center>T</center></td>
          <td><center>V/U</center></td>
           <td><center>V/T-M</center></td>
          <td ><center>T/T</center></td>
          <td ><center>TOTAL VENTA</center></td>
          <td ><center>ASOPAL</center></td>
          <td ><center>SERVIDUMBRE</center></td>
          <td ><center>CARGE PLAYA</center></td>
          <td ><center>TRANSPORTE PLANTA</center></td>
          <td ><center>CARGE CLIENTE </center></td>
          <td ><center>CARRETAJE</center></td>
          
          <td style="width: 80px" ><center>TOTAL COSTOS</center></td>
            <td ><center>PROMEDIO VENTA</center></td>
           <td ><center>PROMEDIO COSTO</center></td>
           <td ><center>UTILIDAD</center></td>
      </nav>
        </tr>
       
        <?php
        
       $valortotaltotal=0;
        $costosventatotal=0;
        $utilidadtotal=0;
        $totalventaneta=0;
        $totalasopal=0;
        $totalservidumbre=0;
        $totalcargeplaya=0;
        $totaltransporteplanta=0;
        $totaltransportecliente=0;
        $totalcarretaje=0;
        $totalcosto=0;
        $totalutilidad=0;
        include_once '../../../class/conexion.php';
        $sql1="select * from bodega,cliente,venta,venta_producto,producto,inventario_producto where venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto "
                . " and inventario_producto.idbodega=bodega.idbodega and venta.idcliente=cliente.idcliente and venta.fecha >= '".$fecha1."' and venta.fecha <= '".$fecha2."'  order by venta.fecha";
        
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             
             $destino=$rs["destino"];
             if($destino==""){
                 $destino=$rs["nombrecliente"];
             }
             $tipoventa=$rs['tipoventa'];
             
             if($tipoventa==1){
                 $tipoventa="PLAYA";
             }
             if($tipoventa==2){
                 $tipoventa="VCP";
             }
             if($tipoventa==3){
                 $tipoventa="VPP";
             }
             if($tipoventa==4){
                 $tipoventa="VCE";
             }
              $valortransporte=0;
              $formapago="";
             $totalmetos=$rs['totalmetros'];
             $valortotal=$rs['valortotalproducto'];
             $sqltra="select * from viaje where idventa like '".$rs['idventa']."' ";
             $sqlformapago="select * from cuenta_cobrar where idventa like '".$rs['idventa']."' ";
             $datosfp=  mysqli_query($miconexion,$sqlformapago);
             while($r=mysqli_fetch_array($datosfp)){ 
                 $formapago=$r['idcuenta_cobrar'];
             }
             if($formapago==""){
                 $formapago="CONT";
             }
             else{
                 $formapago="CRT";
             }
             $datos=  mysqli_query($miconexion,$sqltra);
             while($r=mysqli_fetch_array($datos)){ 
                 $valortransporte=$r['valorviaje'];
             }
             
             $valorunitario=$valortotal/$totalmetos;
             $costosventa=$rs['costosventa'];
             $utilidad=$valortotal-$costosventa;
             $valortotaltotal=$valortotaltotal+$valortotal;
             $costosventatotal=$costosventatotal+$costosventa;
             $utilidadtotal=$utilidadtotal+$utilidad;
             $valorventa=$valortotal+$valortransporte;
             $promedioventa=$valortotal/$totalmetos;
             $promediocostos=$costosventa/$totalmetos;
             $totalventaneta=$totalventaneta+$valorventa;
             $totalasopal=$totalasopal+$rs["asopal"];
             $totalservidumbre=$totalservidumbre+$rs["servidumbre"];
             $totalcargeplaya=$totalcargeplaya+$rs["cargeplaya"];
             $totaltransporteplanta=$totaltransporteplanta+$rs["transporteplanta"];
             $totaltransportecliente=$totaltransportecliente+$rs["cargeclente"];
             $totalcarretaje=$totalcarretaje+$rs["carretajeylavado"];
             $totalcosto=$totalcosto+$costosventa;
             $totalutilidad=$totalutilidad+$utilidad;
             
             echo "
            
<tr>
 <td >
        ".$rs["fecha"]."

          </td>
             <td >
        ".$rs["idventa"]."

          </td>
          
          <td >
             <p style='text-align: center'>".$rs["documentoventa"]."</p> 
          

          </td>
          <td >
          ".$tipoventa."
          </td>
          <td >
          ".$formapago."
          </td>
          <td >
          ".$rs["nombrebodega"]."
          </td>
          <td >
          ".$destino."
          </td>
          <td >
          ".$rs["nombrecliente"]."
          </td>
          <td>
          ".$rs["nombreproducto"]."

          </td>
           <td>
          
           ".$rs["viajes"]."
          </td>
           <td>
         ".$rs["metros3"]."

          </td>
          <td style='text-align: right'>
         ".$totalmetos."

          </td>
          <td style='text-align: right'>
          $
            ".number_format($valorunitario , 0, '.', ',')."
          </td>
          <td style='text-align: right'>
        $  
        ".number_format($valortotal , 0, '.', ',')."

          </td>
          <td style='text-align: right'>
        $  
        ".number_format($valortransporte ,0, '.', ',')."

          </td>
          <td style='text-align: right'>
        $  
        ".number_format($valorventa , 0, '.', ',')."

          </td>
          <td style='text-align: right'>
        $  
        ".number_format($rs["asopal"] , 0, '.', ',')."

          </td>
          <td style='text-align: right'>
        $  
        ".number_format($rs["servidumbre"] , 0, '.', ',')."

          </td>
          <td style='text-align: right'>
        $  
        ".number_format($rs["cargeplaya"] , 0, '.', ',')."

          </td>
          <td style='text-align: right'>
        $  
        ".number_format($rs["transporteplanta"] , 0, '.', ',')."

          </td>
          <td style='text-align: right'>
        $  
        ".number_format($rs["cargeclente"] , 0, '.', ',')."

          </td>
          <td style='text-align: right'>
        $  
        ".number_format($rs["carretajeylavado"] , 0, '.', ',')."

          </td>
         
           <td style='text-align: right'>
           $
            ".number_format($costosventa , 0, '.', ',')."

          </td>
           <td style='text-align: right'>
        $  
        ".number_format($promedioventa , 0, '.', ',')."

          </td>
          <td style='text-align: right'>
        $  
        ".number_format($promediocostos , 0, '.', ',')."

          </td>
           <td style='text-align: right'>
          $
            ".number_format($utilidad, 0, '.', ',')."

          </td>
        </tr>
         "  ; } ?>
       
        <tr>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td >
        TOTALES
          </td>
          <td style='text-align: right; color: royalblue' >
            
          
          <?php
          echo number_format($totalventaneta , 0, ',', '.');
          ?>
          </td>
          
          <td style='text-align: right'>
         
          
          <?php
          echo number_format($totalasopal , 0, ',', '.');
          ?>
          </td>
          <td style='text-align: right'>
         
          
          <?php
          echo number_format($totalservidumbre , 0, ',', '.');
          ?>
          </td>
          <td style='text-align: right'>
         
          
          <?php
          echo number_format($totalcargeplaya , 0, ',', '.');
          ?>
          </td>
          <td style='text-align: right'>
         
          
          <?php
          echo number_format($totaltransporteplanta , 0, ',', '.');
          ?>
          </td>
          <td style='text-align: right'>
         
          
          <?php
          echo number_format($totaltransportecliente , 0, ',', '.');
          ?>
          </td>
          <td style='text-align: right'>
         
          
          <?php
          echo number_format($totalcarretaje , 0, ',', '.');
          ?>
          </td>
          <td style='text-align: right; color: royalblue'>
         
          
          <?php
          echo number_format($totalcosto , 0, ',', '.');
          ?>
          </td>
          <td >
        
          </td>
          <td >
        
          </td>
          <td style='text-align: right; color: royalblue'>
         
          
          <?php
          echo number_format($totalutilidad , 0, ',', '.');
          ?>
          </td>
        </tr>
        
        
        
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

