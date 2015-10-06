<?php

include_once '../../../../class/conexion.php';

$per_page = 11; 

if($_GET)
{
$page=$_GET['page'];
}



//get table contents
$start = ($page-1)*$per_page;

?>
<table style="width: 930px; height: 56px;" border="1">
      <tbody>
        <tr>
          <td><center>ID</center></td>   
          <td style="width: 80px"><center>FECHA</center></td>
          <td  ><center>PROD</center></td> 
          <td  ><center>ORIGEN</center></td>
          <td  ><center>DESTINO</center></td>
          <td><center>M</center></td>
          <td><center>ASOPAL</center></td>
          
          <td ><center>SERVIDUMBRE</center></td>
          <td ><center>CARGE PLAYA</center></td>
          <td ><center>TRANSPORTE A PLANTA</center></td>
          <td ><center>COSTO TOTAL</center></td>
          
        </tr>
       
        <?php
        
       $valortotaltotal=0;
       $totalasopal=0;
       $totalservidumbre=0;
       $totalcargeplaya=0;
       $totaltransporte=0;
       $totalmetros=0;
       
        $sql1="select * from transportematerial ";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $productoorigen=$rs["idinventarioproductosale"];
           $productodestino=$rs["idinventarioproductoentra"];
           $sql2="select * from inventario_producto,bodega,producto where inventario_producto.idproducto=producto.idproducto and inventario_producto.idbodega=bodega.idbodega and inventario_producto.idinventario_producto like '".$productoorigen."'";
           $sql3="select * from inventario_producto,bodega,producto where inventario_producto.idproducto=producto.idproducto and inventario_producto.idbodega=bodega.idbodega and inventario_producto.idinventario_producto like '".$productodestino."'";
           
           $dato2=  mysqli_query($miconexion,$sql2);
         while($rs2=mysqli_fetch_array($dato2)){ 
             $origen=$rs2["nombrebodega"];
             $producto=$rs2["nombreproducto"];
         }
         
         
         $dato3=  mysqli_query($miconexion,$sql3);
         while($rs2=mysqli_fetch_array($dato3)){ 
             $destino=$rs2["nombrebodega"];
             
         }
             $metros=$rs["cantidad"];
             $totalmetros=$totalmetros+$metros;
             $asopal=$rs["asopal"];
             $totalasopal=$totalasopal+$asopal;
              $servidumbre=$rs["servidumbre"];
              $totalservidumbre=$totalservidumbre+$servidumbre;
              $cargeplaya=$rs["valorcargeplaya"];
              $totalcargeplaya=$totalcargeplaya+$cargeplaya;
              $transporteplanta=$rs["valortransporte"];
              $totaltransporte=$totaltransporte+$transporteplanta;
              $valortotal=0;
             $valortotal=$asopal+$servidumbre+$cargeplaya+$transporteplanta;
             
             $valortotaltotal=$valortotaltotal+$valortotal;
        echo "
             <tr>
             <td >
        ".$rs["idtransporte"]."

          </td>
          <td >
             ".$rs["fecha"]."
          

          </td>
          <td >
          ".$producto."
          </td>
          <td >
          ".$origen."
          </td>
          <td>
          ".$destino."

          </td>
          <td style='text-align: right'>
          
           ".number_format($rs["cantidad"] , 0, '.', ',')."
          </td>
          <td style='text-align: right'>
          
           $".number_format($asopal , 0, '.', ',')."
          </td>
           <td style='text-align: right'>
          $
           ".number_format($servidumbre , 0, '.', ',')."
          </td>
          <td style='text-align: right'>
          $
           ".number_format($cargeplaya, 0, '.', ',')."
          </td>
          <td style='text-align: right'>
          $
           ".number_format($transporteplanta, 0, '.', ',')."
          </td>
          </td>
          <td style='text-align: right'>
          $
           ".number_format($valortotal, 0, '.', ',')."
          </td>
           <td style='text-align: right'>"; ?>
          <p class="ovalo"  onclick="eliminartraslado($(this).attr('id'));" <?php echo " id='".$rs["idtransporte"]."'>BORRAR</p>
           
          </td>
         </tr>"; }?>
          
        
        
      </tbody>
    </table>  
        
  

         
		
		 
		
	

