<?PHP
$fecha1=$_GET['fecha1'];
$fecha2=$_GET['fecha2'];
?><center>
<form action="ficheroExcel.php?fecha1= <?PHP echo $fecha1 ?> &fecha2=<?PHP echo $fecha2 ?>&nombre=extracto caja " method="post" target="_blank" id="FormularioExportacion">
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

<div id="Exportar_a_Excel">


<?php
        
       $entrada;
       $salida;
       $entradaanterior;
       $salidaanterior;
       $saldoanterior;
        include_once '../../../class/conexion.php';
        $sql1="select SUM(valor)as totalsalida from salida_caja where salida_caja.fecha >= '".$fecha1."' and salida_caja.fecha <= '".$fecha2."' and idcaja=1 order by salida_caja.fecha";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            $salida=$rs['totalsalida'];
         } 
          $sql1="select SUM(valor)as totalentrada from entrada_caja where entrada_caja.fecha >= '".$fecha1."' and entrada_caja.fecha <= '".$fecha2."' and idcaja=1 order by entrada_caja.fecha";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            $entrada=$rs['totalentrada'];
         }
        $movimientocaja=$entrada-$salida;
        $sql1="select SUM(valor)as entradas from entrada_caja WHERE fecha < '".$fecha1."' and idcaja=1 order by fecha";
      
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $entradaanterior=$rs['entradas'];
         }
         $sql1="select SUM(valor)as salidas from salida_caja WHERE fecha < '".$fecha1." ' and idcaja=1 order by fecha";
      
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $salidaanterior=$rs['salidas'];
         }
         $saldoanterior=$entradaanterior-$salidaanterior;
         
        $movimientocaja=$saldoanterior+$entrada-$salida;
         
         ?>















<head>
    
    
</head>
<h1 style="text-align: center">EXTRACTO DE CAJA DE <?php echo $fecha1." A ".$fecha2 ?></h1> 

   
    
    

<div id="movimientocaja" style = "text-align: center"><center><table style="width: 700px; height: 56px;" border="1">
         <h3> </h3>
      <tbody style="text-align: center">
        <tr>
          
          <td style="width: 307.533px;"><center>FECHA</center></td>
          <td style="width: 200.067px;"><center>DOCUMENTO</center></td>
          <td style="width: 200.067px;"><center>CONCEPTO</center></td>
          <td ><center>SALDO ANTERIOR</center></td>
          <td ><center>ENTRADA</center></td>
          <td ><center>SALIDA</center></td>
          <td ><center>NUEVO SALDO</center></td>
          
        
        </tr>
<?php
        
       
        include_once '../../../class/conexion.php';
        $saldoanteriorprincipal=$saldoanterior;
        $sql1="select * from entrada_caja where entrada_caja.fecha >= '".$fecha1."' and entrada_caja.fecha <= '".$fecha2."' and idcaja='1' and entrada_caja.concepto like 'venta numero%' order by entrada_caja.fecha";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){
             
echo "
             <tr>
             <td >
        ".$rs["fecha"]."

          </td>
          <td >";  $documento= preg_replace("[^0-9]", "", $rs['concepto']); 
          
          echo $documento."

          </td>
          <td >
             <p style='text-align: center'>".$rs["concepto"]."</p> 
          

          </td>
          <td >
             ".number_format(  $saldoanteriorprincipal , 0, '.', ',')."
          </td>



          <td >
          
             ".number_format( $rs["valor"]  , 0, '.', ',')."
          </td>
          <td >
          
          </td>
          <td >";
          $saldoanteriorprincipal=$saldoanteriorprincipal+$rs["valor"];
          echo "
          ".number_format(  $saldoanteriorprincipal , 0, '.', ',')."
          </td>
          
          
         
       
        </tr>
         "  ;
          
          
          
         }
         
         
         
         
         
         $sql1="select * from movimientoaja where movimientoaja.fecha >= '".$fecha1."' and movimientoaja.fecha <= '".$fecha2."'  and movimientoaja.tipomovimiento <'3'";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
echo "
             <tr>
             <td >
        ".$rs["fecha"]."

          </td>
          <td >";  $documento= preg_replace("[^0-9]", "", $rs['numerodocumento']); 
          
          echo $documento."

          </td>
          <td >
             <p style='text-align: center'>".$rs["concepto"]."</p> 
          

          </td>
          <td >
             ".number_format( $saldoanteriorprincipal  , 0, '.', ',')."
          </td>
          <td >
             ".number_format( $rs["valor"]  , 0, '.', ',')."
          </td>
          <td >
          
          </td>
          <td >";
          $saldoanteriorprincipal=$saldoanteriorprincipal+$rs["valor"];
          echo "
          ".number_format(  $saldoanteriorprincipal , 0, '.', ',')."
          </td>
          
         
       
        </tr>
         "  ; }
         
         
         
         
         
         
         
        $sql1="select * from salida_caja where salida_caja.fecha >= '".$fecha1."' and salida_caja.fecha <= '".$fecha2."' and idcaja=1 and salida_caja.concepto like 'compra numero%'";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
          
echo "
             <tr>
             <td >
        ".$rs["fecha"]."

          </td>
          <td >";  $documento= preg_replace("[^0-9]", "", $rs['concepto']); 
          
          echo $documento."

          </td>
          <td >
             <p style='text-align: center'>".$rs["concepto"]."</p> 
          

          </td>
          <td >
             ".number_format( $saldoanteriorprincipal  , 0, '.', ',')."
          </td>
          <td >
          
          </td>
          <td>
          ".number_format( $rs["valor"] , 0, '.', ',')."
          </td>
         <td>";
          $saldoanteriorprincipal=$saldoanteriorprincipal-$rs["valor"];
          echo "
          ".number_format(  $saldoanteriorprincipal , 0, '.', ',')."
          </td>
         
       
        </tr>
         "  ; }
         
         
         
         
            $sql1="select * from movimientoaja where movimientoaja.fecha >= '".$fecha1."' and movimientoaja.fecha <= '".$fecha2."'  and movimientoaja.tipomovimiento >'2'";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
echo "
             <tr>
             <td >
        ".$rs["fecha"]."

          </td>
          <td >";  $documento= preg_replace("[^0-9]", "", $rs['numerodocumento']); 
          
          echo $documento."

          </td>
          <td >
             <p style='text-align: center'>".$rs["concepto"]."</p> 
          

          </td>
          <td >
             ".number_format( $saldoanteriorprincipal  , 0, '.', ',')."
          </td>
          <td >
            
          </td>
          <td >
           ".number_format( $rs["valor"]  , 0, '.', ',')."
          </td>
          <td >";
          $saldoanteriorprincipal=$saldoanteriorprincipal-$rs["valor"];
          echo "
          ".number_format(  $saldoanteriorprincipal , 0, '.', ',')."
          </td>
          
         
       
        </tr>
         "  ; }
         
         ?>
 </tbody>
    </table>
    <p></p>
    <p></p>
    <center><table style=" height: 56px;" border="1">
    <tbody>
        
        <tr>
          
          <td ><center>SALDO ANTERIOR</center></td>
          <td ><center> <?php echo number_format( $saldoanterior  , 0, '.', ',');?>  </center></td>
         
        </tr>
        <tr>
          
          <td ><center>ENTRADA</center></td>
          <td ><center> <?php echo  number_format( $entrada  , 0, '.', ',');?>  </center></td>
         
        </tr>
         <tr>
          
          <td ><center>SALIDA</center></td>
          <td ><center> <?php  echo number_format( $salida  , 0, '.', ',');?>  </center></td>
         
        </tr>
         <tr>
          
          <td ><center>SALDO ACTUAL</center></td>
          <td><center> <?php echo number_format( $movimientocaja  , 0, '.', ',');?> </center></td>
         
        </tr>
      </tbody>
        </table> </CENTER></center></div>