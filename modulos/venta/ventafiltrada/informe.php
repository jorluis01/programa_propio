<?PHP
$fecha1=$_GET['fecha1'];
$fecha2=$_GET['fecha2'];

$idcliente=$_GET['idcliente'];
$tipoventa=$_GET['tipoventa'];
?>

<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">VENTAS ENTRE <?php echo $fecha1; ?> Y <?php echo $fecha2; ?> </h1> </p>
    <center>
<form action="modulos/venta/informe/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
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
        <tr>
          <td ><center>ID</center></td>   
      <td style="width: 50px"><center>REMISION NUMERO</center></td>
          <td style="width: 80px" ><center>FECHA</center></td>
          <td style="width: 80px" ><center>F/P</center></td>
          <td ><center>ORIGEN</center></td>
          <td ><center>DESTINO</center></td>
          <td ><center>CLIENTE</center></td>
          <td ><center>PROD</center></td>
          <td ><center>V</center></td>
          <td ><center>M</center></td>
          <td ><center>T</center></td>
          <td><center>V/U</center></td>
          <td ><center>V/T</center></td>
          <td style="width: 80px" ><center>COSTOS</center></td>
           <td ><center>UTILIDAD</center></td>
        </tr>
       
        <?php
        
       $valortotaltotal=0;
        $costosventatotal=0;
        $utilidadtotal=0;
        include_once '../../../class/conexion.php';
        
        
        
        if($idcliente==0){
            $sql1="select * from bodega,cliente,venta,venta_producto,producto,inventario_producto where venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto "
                . "and inventario_producto.idbodega=bodega.idbodega and venta.idcliente=cliente.idcliente and venta.fecha >= '".$fecha1."'and venta.fecha <= '".$fecha2."'";
          
        }else{
            $sql1="select * from bodega,cliente,venta,venta_producto,producto,inventario_producto where venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto "
                . "and inventario_producto.idbodega=bodega.idbodega and venta.idcliente=cliente.idcliente and venta.fecha >= '".$fecha1."'and venta.fecha <= '".$fecha2."' and cliente.idcliente like '".$idcliente."'";      
            
               }
        
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $formapago="";
             $sqlformapago="select * from cuenta_cobrar where idventa like '".$rs['idventa']."' ";
             $datosfp=  mysqli_query($miconexion,$sqlformapago);
             while($r=mysqli_fetch_array($datosfp)){ 
                 $formapago=$r['idcuenta_cobrar'];
             }
             if($tipoventa==0){
                 
             
             
             $totalmetos=$rs['totalmetros'];
             $valortotal=$rs['valortotalproducto'];
             $valorunitario=$valortotal/$totalmetos;
             $costosventa=$rs['costosventa'];
             $utilidad=$valortotal-$costosventa;
             $valortotaltotal=$valortotaltotal+$valortotal;
             $costosventatotal=$costosventatotal+$costosventa;
             $utilidadtotal=$utilidadtotal+$utilidad;
        echo "
             <tr>
             <td >
        ".$rs["idventa"]."

          </td>
          <td >
             <p style='text-align: center'>".$rs["documentoventa"]."</p> 
          

          </td>
          <td >
          ".$rs["fecha"]."
          </td>
          <td >
          ";
             if($formapago==""){
                 $formapago="CONT";
             }
             else{
                 $formapago="CRT";
             }
        echo $formapago."
          </td>
          <td >
          ".$rs["nombrebodega"]."
          </td>
          <td >
          ".$rs["destino"]."
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
            ".number_format($costosventa , 0, '.', ',')."

          </td>
           <td style='text-align: right'>
          $
            ".number_format($utilidad, 0, '.', ',')."

          </td>
        </tr>
             
             
             
             
         "  ; }
         
         //contado
            if($tipoventa==1){
             if($formapago==""){
                $totalmetos=$rs['totalmetros'];
             $valortotal=$rs['valortotalproducto'];
             $valorunitario=$valortotal/$totalmetos;
             $costosventa=$rs['costosventa'];
             $utilidad=$valortotal-$costosventa;
             $valortotaltotal=$valortotaltotal+$valortotal;
             $costosventatotal=$costosventatotal+$costosventa;
             $utilidadtotal=$utilidadtotal+$utilidad;
        echo "
             <tr>
             <td >
        ".$rs["idventa"]."

          </td>
          <td >
             <p style='text-align: center'>".$rs["documentoventa"]."</p> 
          

          </td>
          <td >
          ".$rs["fecha"]."
          </td>
          <td >
          ";
             if($formapago==""){
                 $formapago="CONT";
             }
             else{
                 $formapago="CRT";
             }
        echo $formapago."
          </td>
          <td >
          ".$rs["nombrebodega"]."
          </td>
          <td >
          ".$rs["destino"]."
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
            ".number_format($costosventa , 0, '.', ',')."

          </td>
           <td style='text-align: right'>
          $
            ".number_format($utilidad, 0, '.', ',')."

          </td>
        </tr>
             
             
             
             
         "  ;
                 
                 
                 
            }   //
            }
            //credito
            if($tipoventa==2){
                if ($formapago==""){
                    
                }else{
                 $totalmetos=$rs['totalmetros'];
             $valortotal=$rs['valortotalproducto'];
             $valorunitario=$valortotal/$totalmetos;
             $costosventa=$rs['costosventa'];
             $utilidad=$valortotal-$costosventa;
             $valortotaltotal=$valortotaltotal+$valortotal;
             $costosventatotal=$costosventatotal+$costosventa;
             $utilidadtotal=$utilidadtotal+$utilidad;
        echo "
             <tr>
             <td >
        ".$rs["idventa"]."

          </td>
          <td >
             <p style='text-align: center'>".$rs["documentoventa"]."</p> 
          

          </td>
          <td >
          ".$rs["fecha"]."
          </td>
          <td >
          ";
             if($formapago==""){
                 $formapago="CONT";
             }
             else{
                 $formapago="CRT";
             }
        echo $formapago."
          </td>
          <td >
          ".$rs["nombrebodega"]."
          </td>
          <td >
          ".$rs["destino"]."
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
            ".number_format($costosventa , 0, '.', ',')."

          </td>
           <td style='text-align: right'>
          $
            ".number_format($utilidad, 0, '.', ',')."

          </td>
        </tr>
             
             
             
             
         "  ;   
                }
                
            }
         
         
         
         
         
             
        
        
        
        
       
            
            
            
            
        }   ?>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>   
        <td></td>
        <td>TOTALES</td>
        <td style="text-align: right"><?PHP echo '$'.number_format($valortotaltotal, 0, '.', ',');?></td>
        <td style="text-align: right"><?PHP echo '$'.number_format($costosventatotal, 0, '.', ',');?></td>
        <td style="text-align: right"><?PHP echo '$'.number_format($utilidadtotal, 0, '.', ',');?></td>
        </tr>
        
        
        
        
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

