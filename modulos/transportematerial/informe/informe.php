<?PHP
$fecha1=$_GET['fecha1'];
$fecha2=$_GET['fecha2'];
?>

   <center>FECHAINICIAL: <input name="fechacaja" type="date" id="fechamovimientoinicial"  > 
       FECHAFINAL: <input name="fechacaja" type="date" id="fechamovientofinal"  > 
       <p><input name="buscarinformecaja" type="button" id="buscarinformemovimiento" value="Buscar" onclick="movimientomaterialinforme()"  > 

            <center>  <form action="ficheroExcel.php?fecha1=&fecha2=&nombre=Traslado entre Bodegas " method="post" target="_blank" id="FormularioExportacion">
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
<div class="tipobodega" id="Exportar_a_Excel">
    <p style="text-align: center"><h1 style="text-align: center">TRASLADO ENTRE BODEGAS <?php echo $fecha1; ?> Y <?php echo $fecha2; ?></h1> </p>
    <center><table style="width: 930px; height: 56px;" border="1">
      <tbody>
        <tr>
          <td><center>ID</center></td>   
          <td style="width: 80px"><center>FECHA</center></td>
          <td  ><center>PROD</center></td> 
          <td  ><center>ORIGEN</center></td>
          <td  ><center>DESTINO</center></td>
          <td><center>V</center></td>
          <td><center>M</center></td>
          <td><center>T</center></td>
          <td><center>ASOPAL</center></td>
          
          <td ><center>SERVIDUMBRE</center></td>
          <td ><center>CARGE PLAYA</center></td>
          <td ><center>TRANSPORTE A PLANTA</center></td>
          <td ><center>COSTO TOTAL</center></td>
          
        </tr>
       
        <?php
        
       $valortotaltotal=0;
       $totalasopal=0;
       $totalservidumbre=0;
       $totalcargeplaya=0;
       $totaltransporte=0;
       $totalmetros=0;
        include_once '../../../class/conexion.php';
        $sql1="select * from transportematerial where transportematerial.fecha >='".$fecha1."' and transportematerial.fecha <='".$fecha2."' order by transportematerial.fecha";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $productoorigen=$rs["idinventarioproductosale"];
           $productodestino=$rs["idinventarioproductoentra"];
           $sql2="select * from inventario_producto,bodega,producto where inventario_producto.idproducto=producto.idproducto and inventario_producto.idbodega=bodega.idbodega and inventario_producto.idinventario_producto like '".$productoorigen."'";
           $sql3="select * from inventario_producto,bodega,producto where inventario_producto.idproducto=producto.idproducto and inventario_producto.idbodega=bodega.idbodega and inventario_producto.idinventario_producto like '".$productodestino."'";
           
           $dato2=  mysqli_query($miconexion,$sql2);
         while($rs2=mysqli_fetch_array($dato2)){ 
             $origen=$rs2["nombrebodega"];
             $producto=$rs2["nombreproducto"];
         }
         
         
         $dato3=  mysqli_query($miconexion,$sql3);
         while($rs2=mysqli_fetch_array($dato3)){ 
             $destino=$rs2["nombrebodega"];
             
         }
             $metros=$rs["cantidad"];
             $totalmetros=$totalmetros+$metros;
             $asopal=$rs["asopal"];
             $totalasopal=$totalasopal+$asopal;
              $servidumbre=$rs["servidumbre"];
              $totalservidumbre=$totalservidumbre+$servidumbre;
              $cargeplaya=$rs["valorcargeplaya"];
              $totalcargeplaya=$totalcargeplaya+$cargeplaya;
              $transporteplanta=$rs["valortransporte"];
              $totaltransporte=$totaltransporte+$transporteplanta;
              $valortotal=0;
             $valortotal=$asopal+$servidumbre+$cargeplaya+$transporteplanta;
             
             $valortotaltotal=$valortotaltotal+$valortotal;
        echo "
             <tr>
             <td >
        ".$rs["idtransporte"]."

          </td>
          <td >
             ".$rs["fecha"]."
          

          </td>
          <td >
          ".$producto."
          </td>
          <td >
          ".$origen."
          </td>
          <td>
          ".$destino."

          </td>
          <td style='text-align: right'>
          
           ".number_format($rs["viajes"] , 0, '.', ',')."
          </td>
          <td style='text-align: right'>
          
           ".number_format($rs["metros"] , 0, '.', ',')."
          </td>
          <td style='text-align: right'>
          
           ".number_format($rs["cantidad"] , 0, '.', ',')."
          </td>
          <td style='text-align: right'>
          
           $".number_format($asopal , 0, '.', ',')."
          </td>
           <td style='text-align: right'>
          $
           ".number_format($servidumbre , 0, '.', ',')."
          </td>
          <td style='text-align: right'>
          $
           ".number_format($cargeplaya, 0, '.', ',')."
          </td>
          <td style='text-align: right'>
          $
           ".number_format($transporteplanta, 0, '.', ',')."
          </td>
          </td>
          <td style='text-align: right'>
          $
           ".number_format($valortotal, 0, '.', ',')."
          </td>
           
        </tr>
         "  ; } ?>
        
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       
        
        <td>TOTALES</td>
        <td style="text-align: right"><?PHP echo ''.number_format($totalmetros, 0, '.', ',');?></td>
        <td style="text-align: right"><?PHP echo '$'.number_format($totalasopal, 0, '.', ',');?></td>
        <td style="text-align: right"><?PHP echo '$'.number_format($totalservidumbre, 0, '.', ',');?></td>
        <td style="text-align: right"><?PHP echo '$'.number_format($totalcargeplaya, 0, '.', ',');?></td>
        
        <td style="text-align: right"><?PHP echo '$'.number_format($totaltransporte, 0, '.', ',');?></td>
        
        
        <td style="text-align: right"><?PHP echo '$'.number_format($valortotaltotal, 0, '.', ',');?></td>
        </tr>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

