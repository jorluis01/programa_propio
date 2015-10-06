
 <center><table style="width: 400px; height: 56px;" border="1">
      <tbody>
        <tr>
            <td style="width: 150.65px;"><center>IDENTIFICADOR</center></td>
          <td style="width: 307.533px;"><center>PRODUCTO</center></td>
          <td ><center>VALOR UNITARIO</center></td>
          <td style="width: 200.067px;"><center>CANTIDAD</center></td>
          <td style="width: 200.067px;"><center>BODEGA</center></td>
           <td style="width: 200.067px;"><center>SELECCIONAR</center></td>
         
                
        </tr>
    <?php

         
         include_once '../../../class/conexion.php';
         $buscar=$_GET['nombre'];
         
          $sql1="select * from compra_producto,inventario_producto,producto,bodega where inventario_producto.idinventario_producto=compra_producto.idinventario and inventario_producto.idproducto=producto.idproducto and inventario_producto.idbodega=bodega.idbodega and cantidad > 0 and producto.nombreproducto like '%".$buscar."%'";
         $dato1= mysqli_query($miconexion, $sql1);
         
         while($rs=mysqli_fetch_array($dato1)){ 
             $idcompra=$rs["idcompra"];
             $cantidadcomprada=$rs["cantidad"];
             $cantidadvendida=0;
        echo "
             <tr>
            
           <td class='idcompra".$rs["idcompra"]."' >".$rs["idcompra"]."<br>
          </td>
          <td class='nombreproducto".$rs["idcompra"]."'>".$rs["nombreproducto"]."
             <input type='hidden' id='idinventarioproducto".$rs["idcompra"]."' value='".$rs["idinventario_producto"]."'> 
            <input type='hidden' id='valorcompraproducto".$rs["idcompra"]."' value='".$rs["valorunitario"]."'>                 
<br>
          </td>
           <td class='nombreproducto".$rs["idcompra"]."'>".$rs["valorunitario"]."   </td>
          <td class='cantidadproducto".$rs["idcompra"]."'>";
        $sql2="select cantidad from ventacompra where idcompra=".$idcompra;
        $dato2= mysqli_query($miconexion, $sql2);
        while($rs2=mysqli_fetch_array($dato2)){ 
            $cantidadvendida=$cantidadvendida+$rs2["cantidad"];
        }
        $cantidadtotal=$cantidadcomprada-$cantidadvendida;
        echo $cantidadtotal."<br>
          </td>
          <td class='nombrebodega".$rs["idcompra"]."' >".$rs["nombrebodega"]."<br>
          </td>
          
          <td >
          <img src='images/selecciona.png' class='idcompraproducto' id='".$rs["idcompra"]."'> 
<br>
          </td>
        </tr>
         "  ;}
         
    ?>


