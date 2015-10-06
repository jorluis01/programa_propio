<?php
        
       
        include_once '../../class/conexion.php';
$sql="select SUM(servidumbre) as valor from venta,venta_producto,inventario_producto,bodega,asignarcarretaje where venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and asignarcarretaje.idbodega=bodega.idbodega and fecha like '".$fecha."%' ";
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor=$rs2['valor'];
         }
          $sql="select SUM(servidumbre) as valor from transportematerial,inventario_producto,bodega,asignarcarretaje where transportematerial.idinventarioproductosale=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and asignarcarretaje.idbodega=bodega.idbodega and fecha like '".$fecha."%' ";
            
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor2=$rs2['valor'];
         }
         
         $sql="select SUM(valor) as valor from movimientoaja where tipomovimiento='5' and fecha like '".$fecha."%'" ;
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valorresta=$rs2['valor'];
         }
         $valortotalservidumbre=$valor+$valor2-$valorresta;