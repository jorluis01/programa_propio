<?php

include_once '../../../../class/conexion.php';

$per_page = 11; 

if($_GET)
{
$page=$_GET['page'];
}



//get table contents
$start = ($page-1)*$per_page;
$sql="select * from bodega,cliente,venta,venta_producto,producto,inventario_producto where venta_producto.idventa=venta.idventa and venta_producto.idiventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto "
                . "and inventario_producto.idbodega=bodega.idbodega and venta.idcliente=cliente.idcliente order by venta.fecha DESC  limit $start,$per_page";
        $rsd = mysqli_query($miconexion,$sql);
?>


	<table width="800px" border="1">
		
		<?php
                $valortotaltotal=0;
        $costosventatotal=0;
        $utilidadtotal=0;
		//Print the contents
		
		while($rs= mysqli_fetch_array($rsd))
		{
			$totalmetos=$rs['totalmetros'];
             $valortotal=$rs['valortotalproducto'];
             $valorunitario=$valortotal/$totalmetos;
             $costosventa=$rs['costosventa'];
             $utilidad=$valortotal-$costosventa;
             $valortotaltotal=$valortotaltotal+$valortotal;
             $costosventatotal=$costosventatotal+$costosventa;
             $utilidadtotal=$utilidadtotal+$utilidad;
               echo "
             <tr>
             <td class='idmodificarventa' id=' ".$rs["idventa"]."'>
       "; ?><p class="ovalo"   <?php echo " id='".$rs["idventa"]."'>".$rs["idventa"]."</p>

          </td>
          <td >
          ".$rs["fecha"]."
          </td>
          <td >
          ".$rs["nombrebodega"]."
          </td>
          <td >
          ".$rs["nombrecliente"]."
          </td>
          <td>
          ".$rs["nombreproducto"]."

          </td>
           <td>
          
           ".$rs["viajes"]."
          </td>
           <td>
         ".$rs["metros3"]."

          </td>
          <td style='text-align: right'>
         ".$totalmetos."

          </td>
          <td style='text-align: right'>
          $
            ".number_format($valorunitario , 0, '.', ',')."
          </td>
          <td style='text-align: right'>
        $  
        ".number_format($valortotal , 0, '.', ',')."

          </td>
           <td style='text-align: right'>
           $
            ".number_format($costosventa , 0, '.', ',')."

          </td>
           <td style='text-align: right'>
          $
            ".number_format($utilidad, 0, '.', ',')."

          </td>
		<td class='ideliminarventa' id=' ".$rs["idventa"]."'>
        
  "; ?><p class="ovalo"  onclick="eliminarventa($(this).attr('id'));" <?php echo " id='".$rs["idventa"]."'>BORRAR</p>

          </td>

        </tr>
         "  ;
		
		} //while
		?>
	</table>

