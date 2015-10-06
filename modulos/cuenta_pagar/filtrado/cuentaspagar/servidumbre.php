<?PHP

?>
<div class="tipobodega">
    <table style="width: 440px; height: 56px;" border="1">
      <tbody>
        <tr>
         
          <td style="width: 307.533px;"><center>PROVEEDOR SERVIDUMBRE</center></td>
          <td ><center>VALOR</center></td>
          
           <td><center></center></td>
          
        </tr>
       
        <?php
        
       
       
        $sql1="select * from asignarcarretaje,bodega where asignarcarretaje.idbodega=bodega.idbodega group by asignarcarretaje.nombre";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs1=mysqli_fetch_array($dato)){ 
            $idcliente=$rs1['nombre'];
            $idclie=$rs1['idasignar'];
            $sql="select SUM(servidumbre) as valor from venta,venta_producto,inventario_producto,bodega,asignarcarretaje where venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and asignarcarretaje.idbodega=bodega.idbodega and asignarcarretaje.nombre like '".$idcliente."'";
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor=$rs2['valor'];
         }
          $sql="select SUM(servidumbre) as valor from transportematerial,inventario_producto,bodega,asignarcarretaje where transportematerial.idinventarioproductosale=inventario_producto.idinventario_producto and inventario_producto.idbodega=bodega.idbodega and asignarcarretaje.idbodega=bodega.idbodega and asignarcarretaje.nombre='".$idcliente."'";
            
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor2=$rs2['valor'];
         }
         
         $sql="select SUM(valor) as valor from movimientoaja where idclienteproveedor='".$idclie."' and tipomovimiento='5'" ;
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valorresta=$rs2['valor'];
         }
         $valortotal=$valor+$valor2-$valorresta;
         
        echo "
             <tr>
           
          <td >
          ".$rs1["nombre"]."
          </td>
          <td>
          ".$valortotal."

          </td>
         
          <td>
          <center>"; ?> <button id="<?php echo $idclie; ?>" onclick="cogeridcuentapagar($(this).attr('id'))" >SELECCIONAR</button></center>
<?php
echo "
          </td>
         
        </tr>
         "  ; } ?>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

