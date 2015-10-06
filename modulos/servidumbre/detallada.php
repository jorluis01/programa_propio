

<center>
    <?php
     include_once '../../class/conexion.php';
 $fecha1=$_GET['fecha1'];
 $fecha2=$_GET['fecha2'];
    $nombrecarretaje=$_GET['idservidumbre'];
 $idcarretaje=$nombrecarretaje;
 $sql="select * from asignarcarretaje where idasignar like '".$nombrecarretaje."'";
 $dato=  mysqli_query($miconexion,$sql);
        while ($rs = mysqli_fetch_array($dato)) {
            $nombrecarretaje=$rs['nombre'];
        }
        
        echo "
    
<h2>SERVIDUMBRE DETALLADA ".$nombrecarretaje." ENTRE ".$fecha1." & ".$fecha2."</h2> ";

      //valor anterior
 
  
 $sql="select SUM(servidumbre) as valor from venta,venta_producto,inventario_producto,bodega,asignarcarretaje where venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and asignarcarretaje.idbodega=bodega.idbodega and asignarcarretaje.nombre like '".$nombrecarretaje."' and venta.fecha < '".$fecha1."'";
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor=$rs2['valor'];
         }
          $sql="select SUM(servidumbre) as valor from transportematerial,inventario_producto,bodega,asignarcarretaje where transportematerial.idinventarioproductosale=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and asignarcarretaje.idbodega=bodega.idbodega and asignarcarretaje.nombre='".$nombrecarretaje."' and transportematerial.fecha < '".$fecha1."'";
            
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor2=$rs2['valor'];
         }
         
         $sql="select SUM(valor) as valor from movimientoaja where idclienteproveedor='".$idcarretaje."' and tipomovimiento='5' and fecha < '".$fecha1."'"; ;
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valorresta=$rs2['valor'];
         }
         $valoranterior=$valor+$valor2-$valorresta;
         //valor anterior
 
 
 
        
        
          
        ?>
        <table style="width: 100px; height: 56px;" border="1">
      <tbody>
        <tr>
         
          <td ><center>SALDO ANTERIOR</center></td>
          <td ><center> <?PHP echo number_format($valoranterior, 0, '.', ',')  ?></center></td>
          
          
          
        </tr>
        </tbody></table>
    <p></p>
        
        
<table style="width: 900px; height: 56px;" border="1">
      <tbody>
        <tr>
         
          <td ><center>FECHA</center></td>
          <td ><center>ORIGEN</center></td>
          <td ><center>V</center></td>
          <td ><center>M</center></td>
          <td ><center>C/T</center></td>
          <td ><center>CONCEPTO</center></td>
          <td ><center>S/A</center></td>
          <td ><center>E</center></td>
          <td ><center>S</center></td>
          <td ><center>N/S</center></td>
          
          
        </tr>
       
        <?php
        
        
       
        
        
        
        
       
        include_once '../../class/conexion.php';
        $dias	= (strtotime($fecha1)-strtotime($fecha2))/86400;
	$dias= abs($dias); $dias = floor($dias);
        
for($i=0;$i<=$dias;$i++){
    $sql="select * from venta,venta_producto,inventario_producto,bodega,asignarcarretaje where venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and asignarcarretaje.idbodega=bodega.idbodega and asignarcarretaje.nombre like '".$nombrecarretaje."' and venta.fecha like '".$fecha1."'";
       
          
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato1)){
            echo "
           <tr>
           
          <td >
         ".$rs['fecha']."
          </td>
          <td>
         ".$rs['nombrebodega']."

          </td>
         
           <td>
         ".$rs['viajes']."

          </td>
           <td>
         ".$rs['metros3']."

          </td>
           <td>
         ".$rs['totalmetros']."

          </td>
           <td>
         Venta Material playa

          </td>
          <td>
         ".number_format($valoranterior , 0, '.', ',') ;
            $valoranterior=$valoranterior+$rs['servidumbre'];
            echo "

          </td>
          <td>
           ".number_format($rs['servidumbre'] , 0, '.', ',')."

          </td>
          <td>
         

          </td>
          <td>
         ".number_format( $valoranterior, 0, '.', ',')."

          </td>
         
        </tr>"
             ; 
             
             
    }//fin de servidumbre por venta
    
    
    $sql="select * from transportematerial,inventario_producto,bodega,asignarcarretaje where transportematerial.idinventarioproductosale=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and asignarcarretaje.idbodega=bodega.idbodega and asignarcarretaje.nombre like '".$nombrecarretaje."' and transportematerial.fecha like '".$fecha1."'";
            
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato1)){
          echo "
           <tr>
           
          <td >
         ".$rs['fecha']."
          </td>
          <td>
         ".$rs['nombrebodega']."

          </td>
         
           <td>
         ".$rs['viajes']."

          </td>
           <td>
         ".$rs['metros']."

          </td>
           <td>
         ".$rs['cantidad']."

          </td>
           <td>
         Traslado de Material de playa

          </td>
          <td>
         ".number_format($valoranterior , 0, '.', ',') ;
            $valoranterior=$valoranterior+$rs['servidumbre'];
            echo "

          </td>
          <td>
           ".number_format($rs['servidumbre'] , 0, '.', ',')."

          </td>
          <td>
         

          </td>
          <td>
         ".number_format( $valoranterior, 0, '.', ',')."

          </td>
        </tr>"
             ;  
             
             
             
         }//fin parte traslado de material
    
    $sql="select * from movimientoaja where idclienteproveedor='".$idcarretaje."' and tipomovimiento like '5' and fecha like '".$fecha1."'" ;
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato1)){
             
              echo "
           <tr>
           
          <td >
         ".$rs['fecha']."
          </td>
          <td>
         

          </td>
         
           <td>
         

          </td>
           <td>
         

          </td>
           <td>
        

          </td>
           <td>
         ".$rs['concepto']."

          </td>
          <td>
         ".number_format($valoranterior , 0, '.', ',') ;
            $valoranterior=$valoranterior-$rs['valor'];
            echo "

          </td>
          <td>
           

          </td>
          <td>
         ".number_format($rs['valor'] , 0, '.', ',')."

          </td>
          <td>
         ".number_format( $valoranterior, 0, '.', ',')."

          </td>
         
        </tr>"
             ; 
             //fin de servidumbre por pago desde caja
             
             
             
             
             
         }
    
    
    
    
    
    
    
    
    $fecha1=date("Y-m-d",strtotime($fecha1." 1 days"));
}
           
            
          
         
         
         ;  ?>
      </tbody>
    </table> 








<?php






