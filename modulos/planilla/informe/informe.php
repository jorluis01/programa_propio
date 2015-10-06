<?PHP
$fecha1=$_GET['fecha1'];


?>
<head>
    <link href="fijo.css" rel="stylesheet" type="text/css"/>
</head>

<script src="../../../controllers/js/libs/jquery/jquery-1.4.2.min.js"></script>
<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">PLANILLA REPORTE MOVIMIENTO</h1> </p>
    <center>
        <form action="ficheroExcel.php?fecha=<?php echo $fecha1; ?>" method="post" target="_blank" id="FormularioExportacion">
<p>Exportar a Excel  <img src="export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>



<script language="javascript">
$(document).ready(function() {
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();
});
});
</script>

<table style=" height: 56px;" border="1" id="Exportar_a_Excel" >
      <tbody>
          <tr id="titulo">
      
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
      
      
     

      
      
      
      
        </tr>
       
        <?php
        
       $valortotaltotal=0;
        $costosventatotal=0;
        $utilidadtotal=0;
        include_once '../../../class/conexion.php';
        $sql1="select * from bodega,cliente,venta,venta_producto,producto,inventario_producto where venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto "
                . " and inventario_producto.idbodega=bodega.idbodega and venta.idcliente=cliente.idcliente and venta.fecha like '".$fecha1."'";
        
       
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
        ".number_format($valortransporte , 0, '.', ',')."


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
        ".number_format($rs["carretajeylavado"] ,0, '.', ',')."

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
       
        
        
        
        
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

