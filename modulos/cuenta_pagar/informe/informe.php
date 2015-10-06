<?PHP

?>
<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">CUENTA PAGAR </h1> </p>
    <center><table style="width: 600px; height: 56px;" border="1">
      <tbody>
        <tr>
          <td style="width: 307.533px;"><center>ID</center></td>   
          <td style="width: 307.533px;"><center>DOCUMENTO NUMERO</center></td>
          <td style="width: 200.067px;"><center>PROVEEDOR</center></td>
          <td style="width: 200.067px;"><center>PRODUCTO</center></td>
          <td style="width: 200.067px;"><center>VALOR UNITARIO</center></td>
          <td style="width: 200.067px;"><center>CANTIDAD</center></td>
          <td style="width: 200.067px;"><center>VALOR TOTAL</center></td>
        </tr>
       
        <?php
        
       
        include_once '../../../class/conexion.php';
        $sql1="select * from cuenta_pagar,proveedor,compra,compra_producto,producto,inventario_producto where cuenta_pagar.idcompra=compra.idcompra and compra_producto.idcompra=compra.idcompra and compra_producto.idinventario=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto and compra.idproveedor=proveedor.idproveedor ";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            
        echo "
             <tr>
             <td >
        ".$rs["idcompra"]."

          </td>
          <td >
             <p style='text-align: center'>".$rs["documentocompra"]."</p> 
          

          </td>
          <td >
          ".$rs["nombreproveedor"]."
          </td>
          <td>
          ".$rs["nombreproducto"]."

          </td>
          <td>
          ".$rs["valorunitario"]."

          </td>
          <td>
          ".$rs["cantidad"]."

          </td>
          <td>
          ".$rs["valortotal"]."

          </td>
        </tr>
         "  ; } ?>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

