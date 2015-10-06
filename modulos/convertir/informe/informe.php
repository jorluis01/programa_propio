<?PHP
$fecha1=$_GET['fecha1'];
$fecha2=$_GET['fecha2'];
?>
<center>  <form action="ficheroExcel.php?fecha1=<?php echo $fecha1; ?>&fecha2=<?php echo $fecha2; ?>&nombre=transformacion material " method="post" target="_blank" id="FormularioExportacion">
<p>Exportar a Excel  <img src="export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form></center>

<script language="javascript">
$(document).ready(function() {
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();

});
});
</script>
<div class="tipobodega" id="Exportar_a_Excel">
    <p style="text-align: center"><h2 style="text-align: center">TRANSFORMACION EN PLANTA  <?php echo $fecha1; ?> A <?php echo $fecha2; ?></h2> </p>
    <center><table style="width: 800px; height: 56px;" border="1">
      <tbody>
        <tr>
          <td><center>ID</center></td>   
          <td style="width: 80px"><center>FECHA</center></td>
          <td  ><center>SALIDAS</center></td>     
              
          <td  ><center>ENTRADAS</center></td>          
          
          <td><center>PRODUCTO</center></td>
          <td><center>PROVEEDOOR LAVADO</center></td>
          <td ><center>VALOR</center></td>
          
        </tr>
       
        <?php
        $valorcrudo=0;
       $valortotaltotal=0;
       $totalmetros=0;
       $totalcrudos=0;
        include_once '../../../class/conexion.php';
        $sql1="select * from convertirmaterial,proveedor,inventario_producto,producto where convertirmaterial.idproductosalida=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto and convertirmaterial.idproveedorcarretaje=proveedor.idproveedor and convertirmaterial.fecha >='".$fecha1."' and convertirmaterial.fecha <='".$fecha2."'";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $totalmetros=$totalmetros+$rs["cantidadsalida"];
           if($valorcrudo>=100){
               $valorcrudo=0;
               
           }
             if($valorcrudo==0){
               ?>   
              <tr>
        <td></td>
        <td></td>
        <td style="text-align: right">100</td>
        <td></td>
        <td >crudo</td>
        
        
        <td></td>
        <td style="text-align: right"></td>
        </tr>
              <?php
              $totalcrudos=$totalcrudos+100;
           }
           
             $valorcrudo=$valorcrudo+$rs["cantidadsalida"];
            
             $valortotal=$rs["valorcarretaje"];
             
             $valortotaltotal=$valortotaltotal+$valortotal;
        echo "
             <tr>
             <td >
        ".$rs["idconvertirmaterial"]."

          </td>
          <td >
             ".$rs["fecha"]."
          

          </td>
          <td >
         
          
          
          </td>
          <td style='text-align: right'>
          ".$rs["cantidadsalida"]."
          </td>
          <td >
          ".$rs["nombreproducto"]."
          </td>
          <td>
          ".$rs["nombreproveedor"]."

          </td>
          <td style='text-align: right'>
          
           ".number_format($valortotal , 0, '.', ',')."
          </td>
           
        </tr>
         "  ; } ?>
        
        <tr>
        <td></td>
        <td>TOTALES</td>
        <td style="text-align: right"><?PHP echo ''.number_format($totalcrudos, 0, '.', ',');?></td>
        
        <td style="text-align: right"><?PHP echo ''.number_format($totalmetros, 0, '.', ',');?></td>
        
        <td></td>
        <td></td>
        
        
        
        <td style="text-align: right"><?PHP echo '$'.number_format($valortotaltotal, 0, '.', ',');?></td>
        </tr>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

