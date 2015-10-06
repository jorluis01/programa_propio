<?PHP

?>
<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">CUENTAS POR COBRAR </h1> </p>
    <center><table style="width: 850px; height: 56px;" border="1">
      <tbody>
        <tr>
         
          <td style="width: 307.533px;"><center>DOCUMENTO NUMERO</center></td>
          <td style="width: 307.533px;"><center>CONCEPTO</center></td>
          <td style="width: 200.067px;"><center>CLIENTE</center></td>
          <td style="width: 200.067px;"><center>PRODUCTO</center></td>
          <td style="width: 200.067px;"><center>VALOR UNITARIO</center></td>
          <td style="width: 200.067px;"><center>CANTIDAD</center></td>
          <td style="width: 200.067px;"><center>VALOR TOTAL</center></td>
           
        </tr>
       
        <?php
        
       
        include_once '../../../class/conexion.php';
        $sql1="select * from cuenta_cobrar,cliente,venta,venta_producto,producto,inventario_producto where cuenta_cobrar.idventa=venta.idventa and venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto and venta.idcliente=cliente.idcliente  ";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            
        echo "
             <tr>
             <td >
         <p style='text-align: center'>".$rs["documentoventa"]."</p> 

          </td>
          <td >
            
             <p style='text-align: center'> venta numero ".$rs["idventa"]."</p> 

          </td>
          <td >
          ".$rs["nombrecliente"]."
          </td>
          <td>
          ".$rs["nombreproducto"]."

          </td>
          <td>
          ".$rs["valorunitario"]."

          </td>
          <td>
          ".$rs["totalmetros"]."

          </td>
          <td>
          ".$rs["valortotalproducto"]."

          </td>
          
        </tr>
         "  ; } ?>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

