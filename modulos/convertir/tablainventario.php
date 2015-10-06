<?php 

$valortotalinventario=0;
?>

<div class="tipobodega">
    
    <center><table style="width: 200px; height: 56px;" border="1">
      <tbody>
        <tr>
            
          <td style="width: 307.533px;"><center>PRODUCTO</center></td>
         
          <td style="width: 200.067px;"><center>INVENTARIO</center></td>
          
        </tr>
        <?php
        
        $idproducto;
        include_once '../../class/conexion.php';
        $sql="select * from inventario_producto,bodega,tipobodega,producto where inventario_producto.idbodega=bodega.idbodega and bodega.idtipobodega=tipobodega.idtipobodeba and tipobodega.tipo like 'planta' and inventario_producto.idproducto=producto.idproducto";
        $dato=  mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){ 
             $idproducto=$rs["idproducto"];
             $entradaproducto;
             $salidaproducto;
             $descripcionproducto=$rs['descripcionproducto'];
             $nombreproducto=$rs["nombreproducto"];
        echo "
             <tr>
             
            
          
          <td >".$rs["nombreproducto"]."<br>
          </td>
          <td >";
          $sql1="SELECT sum(cantidad) as cantidad FROM entrada_producto,inventario_producto where entrada_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='".$idproducto."' ";
          $sql2="SELECT sum(cantidad) as cantidad FROM salida_producto,inventario_producto where salida_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='".$idproducto."' ";
          
          $datos1=  mysqli_query($miconexion,$sql1);
             while($rs=mysqli_fetch_assoc($datos1)){
             
             $entradaproductoinicial=$rs["cantidad"];
         }
         $datos2=  mysqli_query($miconexion,$sql2);
             while($rs=mysqli_fetch_assoc($datos2)){
             ;
             $salidaproductoinicial=$rs["cantidad"];
         }
         $cantidadinicial=$entradaproductoinicial-$salidaproductoinicial;
          echo number_format($cantidadinicial, 0, '.', ',')."
          </td>
          
        </tr>
         "  ; } ?>
       
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

