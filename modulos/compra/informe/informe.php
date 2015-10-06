<?PHP
$fecha1=$_GET['fecha1'];
$fecha2=$_GET['fecha2'];
?>
<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">COMPRAS ENTRE <?php echo $fecha1; ?> Y <?php echo $fecha2; ?></h1> </p>
    <center><table style="width: 900px; height: 56px;" border="1">
      <tbody>
        <tr>
          <td><center>ID</center></td>   
          <td><center>FACTURA O REMISION No</center></td>
          <td style="width: 80px" ><center>FECHA</center></td>          
          <td><center>PROVEEDOR</center></td>
          <td><center>PRODUCTO</center></td>
          <td ><center>V</center></td>
          <td ><center>M</center></td>
          <td ><center>C</center></td>
          <td><center>V/U</center></td>
          
          <td><center>V/T</center></td>
        </tr>
       
        <?php
        
       $valortotaltotal=0;
        include_once '../../../class/conexion.php';
        $sql1="select * from proveedor,compra,compra_producto,producto,inventario_producto where compra_producto.idcompra=compra.idcompra and compra_producto.idinventario=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto and compra.idproveedor=proveedor.idproveedor and compra.fecha >='".$fecha1."' and compra.fecha <='".$fecha2."' order by fecha";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            $totalmetos=$rs['metros'];
             $valortotal=$rs['valor'];
             $valorunitario=$valortotal/$totalmetos;
             $valortotaltotal=$valortotaltotal+$valortotal;
        echo "
             <tr>
             <td >
        ".$rs["idcompra"]."

          </td>
          <td >
             <p style='text-align: center'>".$rs["documentocompra"]."</p> 
          

          </td>
          <td >
          ".$rs["fecha"]."
          </td>
          <td >
          ".$rs["nombreproveedor"]."
          </td>
          <td>
          ".$rs["nombreproducto"]."

          </td>
          <td style='text-align: right'>
          
           ".$rs["viajes"]."
          </td>
           <td style='text-align: right'>
         ".$rs["metros"]."

          </td>
          <td style='text-align: right'>
         ".$totalmetos."

          </td>
          <td style='text-align: right'>$
          ".number_format($valorunitario , 0, '.', ',')."

          </td>
          
          <td style='text-align: right'>$
          ".number_format($valortotal , 0, '.', ',')."

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
        <td></td>
        <td></td>
        <td>TOTALES</td>
        <td style="text-align: right"><?PHP echo '$'.number_format($valortotaltotal, 0, '.', ',');?></td>
        </tr>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

