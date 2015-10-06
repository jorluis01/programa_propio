<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">INVENTARIO VALORIZADO</h1> </p>
    <center><table style="width: 600px; height: 56px;" border="1">
      <tbody>
        <tr>
            
          <td style="width: 307.533px;"><center>PRODUCTO</center></td>
          <td style="width: 200.067px;"><center>INVENTARIO INICIAL</center></td>
          <td style="width: 200.067px;"><center>ENTRADAS</center></td>
          <td style="width: 200.067px;"><center>SALIDAS</center></td>
          <td style="width: 200.067px;"><center>INVENTARIO FINAL</center></td>
          <td style="width: 200.067px;"><center>VALOR UNITARIO</center></td>
          <td style="width: 200.067px;"><center>VALOR TOTAL</center></td>
        </tr>
        <?php
        
        $idproducto;
        include_once '../../../class/conexion.php';
        $sql="select * from producto";
        
        $dato=  mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){ 
             $idproducto=$rs["idproducto"];
             $entradaproducto;
             $salidaproducto;
        echo "
             <tr>
             
            
          
          <td >".$rs["nombreproducto"]."<br>
          </td>
          <td >0
          </td>
          <td>
          "; $sql1='SELECT sum(cantidad) as cantidad FROM entrada_producto,inventario_producto where entrada_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='.$idproducto;
            $datos1=  mysqli_query($miconexion,$sql1);
             while($rs=mysqli_fetch_assoc($datos1)){
             echo number_format($rs["cantidad"], 0, '.', ',');
             $entradaproducto=$rs["cantidad"];
         }
         $sql1='SELECT sum(valortotal) as cantidad FROM entrada_producto,inventario_producto,compra,compra_producto where compra_producto.idcompra=compra.idcompra and compra_producto.idinventario=inventario_producto.idinventario_producto and entrada_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='.$idproducto;
      
         $datos1=  mysqli_query($miconexion,$sql1);
             while($rs=mysqli_fetch_assoc($datos1)){
            
             $valortotalcompra=$rs["cantidad"];
            
         }
         echo     "

          </td>
          <td>
          "; $sql2='SELECT sum(cantidad) as cantidad FROM salida_producto,inventario_producto where salida_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='.$idproducto;
            $datos2=  mysqli_query($miconexion,$sql2);
             while($rs=mysqli_fetch_assoc($datos2)){
             echo number_format($rs["cantidad"], 0, '.', ',');
             $salidaproducto=$rs["cantidad"];
         }
         echo     "

          </td>
          <td>
          ";
         $inventariofinal=$entradaproducto-$salidaproducto;
         $valorinventario=0;
          $valorunitario=0;
          $transporte=0;
         if($valortotalcompra==0){
             $sql2='select sum(valorviaje) as viaje from viaje,venta,ventaproducto,inventario_producto where viaje.idventa=venta.idventa and  venta_producto.idventa = venta.idventa
AND venta_producto.idiventario_producto = inventario_producto.idinventario_producto
AND inventario_producto.idproducto='.$idproducto;
              $datos2=  mysqli_query($miconexion,$sql2);
             while($rs=mysqli_fetch_assoc($datos1)){
                 $transporte=$rs['viaje'];
             }
             $sql1='SELECT SUM( costosventa ) AS costo
FROM venta, venta_producto, inventario_producto
WHERE venta_producto.idventa = venta.idventa
AND venta_producto.idiventario_producto = inventario_producto.idinventario_producto
AND inventario_producto.idproducto='.$idproducto;

          
             $datos1=  mysqli_query($miconexion,$sql1);
             while($rs=mysqli_fetch_assoc($datos1)){
                 $valortotalcompra=$rs['costo'];
                 
               
                 $valortotalcompra=$valortotalcompra-$transporte;
                 if($inventariofinal<0){
                     
                      $valorunitario=$valortotalcompra/$salidaproducto;
                     
                     $valorinventario=$valorunitario*$inventariofinal;
                 }
                 if($inventariofinal>0)
                 {
                     if($salidaproducto==0){
                     $valorunitario=0;
                     $valorinventario=0;
                     }else{
                          $valorunitario=$valortotalcompra/$salidaproducto;
                     $valorinventario=$valorunitario*$inventariofinal;
                     }
                     
                 }
                
             
                
             }
         }else{
             
             $valorunitario=$valortotalcompra/$entradaproducto;
             $valorinventario=$valorunitario*$inventariofinal;
         }
         
         //tener en cuenta que al colocar por fechas, cambian resto los procesos para calcular valorinventario
         
         echo number_format($inventariofinal, 0, '.', ',')."

          </td>
           <td>
          ";
         
       
         echo "$".number_format($valorunitario, 2, '.', ',')."

          </td>
           <td>
          ";
         
         echo "$".number_format($valorinventario, 0, '.', ',')."

          </td>
        </tr>
         "  ; } ?>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

