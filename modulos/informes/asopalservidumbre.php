<?PHP
$fecha1=$_GET['fecha1'];
$fecha2=$_GET['fecha2'];
$totalasopal=0;
$totalservidumbre=0;
$totalmetros=0;
$totalviajes=0;
$totalmetro=0;


?>
<head>
    <div id="fechaasopalservidumbres">
   <center>FECHA INICIAL: <input name="fecha1" type="date" id="fechaasopalinicial"  > 
       FECHA FINAL: <input name="fechacaja2" type="date" id="fechaasopalfinal"  > 
       <p><a href="javascript:"><input name="buscarinformecaja" type="button"  value="Buscar" onclick="movimientoasopalrango()"></a> 
</div>
    

<div id="Exportar_a_Excel">
</head>
<h2 style="text-align: center">SALIDA DE MATERIAL DE PLAYA ENTRE <?php echo $fecha1." & ".$fecha2 ;?></h1> 

   
    
    

<div id="asopalservidumbre" style = "text-align: center"><center><table  style="width: 800px; height: 56px;" border="1">
         <h3> </h3>
      <tbody style="text-align: center">
        <tr>
          
          <td ><center>FECHA</center></td>
          <td ><center>ORIGEN</center></td>
	     
		<td ><center>DESTINO</center></td>
          <td ><center>VIAJES</center></td>
          <td ><center>METROS</center></td>
          <td ><center>TOTAL METROS</center></td>
          <td ><center>ASOPAL</center></td>
          <td ><center>SERVIDUMBRE</center></td>
          
          
        
        </tr>
<tr>
          
          <td ><center>VENTA</center></td>
          <td ><center>DE</center></td>
          <td ><center>MATERIAL</center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          
          
        
        </tr>
<?php
$totalasopal=0;
$totalservidumbre=0;
$totalmetros=0;
$totalviajes=0;
$totalmetro=0;

       
        include_once '../../class/conexion.php';
        $sql1="select * from inventario_producto,bodega,venta,venta_producto where venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and venta_producto.idventa=venta.idventa and venta.fecha >= '".$fecha1."' and venta.fecha <= '".$fecha2."' and tipoventa='1'";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $totalviajes=$totalviajes+$rs["viajes"];
             $totalmetro=$totalmetro+$rs["metros3"];
             $totalmetros=$totalmetros+$rs["totalmetros"];
echo "
             <tr>
             <td >
        ".$rs["fecha"]."

          </td>
          <td >
       ".$rs["nombrebodega"]."

          </td>
          
          <td >
        ".$rs["destino"]."

          </td>


          <td >
        ".$rs["viajes"]."

          </td>
          <td >
        ".$rs["metros3"]."

          </td>
          <td >
        ".$rs["totalmetros"]."

          </td>
          <td >";  
          $totalasopal=$totalasopal+$rs['asopal'];
          echo  $rs['asopal']."
           
          </td>
           <td >"; 
          
          $totalservidumbre=$totalservidumbre+$rs['servidumbre'];
          echo $rs['servidumbre']."

          </td>
          
          
          
         
       
        </tr>
         "  ; }
         
         
         
         
         
        
         
         ?>
        <tr>
          
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center><?php echo $totalviajes?></center></td>
          <td ><center></center></td>
          <td ><center><?php echo $totalmetros?></center></td>
          <td ><center><?php echo $totalasopal?></center></td>
          <td ><center><?php echo $totalservidumbre?></center></td>
          
          
        
        </tr>
        <tr>
          
          <td ><center>TRASLADO</center></td>
          <td ><center>DE</center></td>
          <td ><center>MATERIAL</center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          
          
        
        </tr>
        <?php
        
       $totalasopal=0;
$totalservidumbre=0;
$totalmetros=0;
$totalviajes=0;
$totalmetro=0;

        
        $sql1="select * from inventario_producto,bodega,transportematerial where transportematerial.idinventarioproductosale=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and transportematerial.fecha >= '".$fecha1."' and transportematerial.fecha <= '".$fecha2."'";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $totalmetros=$totalmetros+$rs["cantidad"];
             $totalviajes=$totalviajes+$rs["viajes"];
             $metro=$rs["cantidad"]/+$rs["viajes"];

echo "
             <tr>
             <td >
        ".$rs["fecha"]."

          </td>
          <td >
       ".$rs["nombrebodega"]."
       <td >
          planta

          </td>
          </td>
          <td >
          ".$rs["viajes"]."

          </td>
          <td >
           ".$metro."


          </td>
          <td >
        ".$rs["cantidad"]."

          </td>
          <td >"; 

     $totalasopal=$totalasopal+$rs['asopal'];
          
          echo $rs['asopal']."

          </td>
           <td >"; 
          $totalservidumbre=$totalservidumbre+$rs['servidumbre'];
          echo $rs['servidumbre']."

          </td>
          
          
          
         
       
        </tr>
         "  ; }
         
         
         
         
         
        
         
         ?>
        <tr>
          
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center></center></td>
          <td ><center><?php echo $totalmetros?></center></td>
          <td ><center><?php echo $totalasopal?></center></td>
          <td ><center><?php echo $totalservidumbre?></center></td>
          
          
        
        </tr>
 </tbody>
    </table>
  </div>     
</div> 
       <center>  <form action="ficheroExcel.php?fecha1=<?php echo $fecha1; ?>&fecha2=<?php echo $fecha2; ?>&nombre=salida de material " method="post" target="_blank" id="FormularioExportacion">
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
     </CENTER></center></div>