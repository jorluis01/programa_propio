<?php 
$fecha=$_GET['fecha'];
$valortotalinventario=0;
?>
<div class="fechabalance">
    <p style=" text-align: center"> MES: <input name="fechaimformeplanta" type="month" id="fechainformeplanta"  > </p>
    <p style=" text-align: center"><input name="buscarbalance" type="button" id="buscarcaja" value="Buscar" onclick="kardexinforme()" > 
</div>
<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">KARDEX <?php echo $fecha; ?></h1> </p>
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
          $sql1="SELECT sum(cantidad) as cantidad FROM entrada_producto,inventario_producto where entrada_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='".$idproducto."' and entrada_producto.fecha < '".$fecha."-01'";
          $sql2="SELECT sum(cantidad) as cantidad FROM salida_producto,inventario_producto where salida_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='".$idproducto."' and salida_producto.fecha < '".$fecha."-01'";
          
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
          <td>
          "; $sql1="SELECT sum(cantidad) as cantidad FROM entrada_producto,inventario_producto where entrada_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=".$idproducto." and entrada_producto.fecha >= '".$fecha."-01' and entrada_producto.fecha <= '".$fecha."-31' ";
          
          $datos1=  mysqli_query($miconexion,$sql1);
             while($rs=mysqli_fetch_assoc($datos1)){
             echo number_format($rs["cantidad"], 0, '.', ',');
             $entradaproducto=$rs["cantidad"];
         }
         
         echo     "

          </td>
          <td>
          "; $sql2="SELECT sum(cantidad) as cantidad FROM salida_producto,inventario_producto where salida_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=".$idproducto." and salida_producto.fecha >= '".$fecha."-01' and salida_producto.fecha <= '".$fecha."-31' ";;
            $datos2=  mysqli_query($miconexion,$sql2);
             while($rs=mysqli_fetch_assoc($datos2)){
             echo number_format($rs["cantidad"], 0, '.', ',');
             $salidaproducto=$rs["cantidad"];
         }
         echo     "

          </td>
          <td>
          ";
         $inventariofinal=$cantidadinicial+$entradaproducto-$salidaproducto;
         if($descripcionproducto=='material procesado'){
             $valorunitario=12000;
         }
         if($nombreproducto=='crudo'){
             $valorunitario=8000;
         }
         if($nombreproducto=='resevo para afirmado'){
             $valorunitario=6500;
         }
         if($nombreproducto=='piedra rajona'){
             $valorunitario=10;
         }
         $valortotal=$valorunitario*$inventariofinal;
         //tener en cuenta que al colocar por fechas, cambian resto los procesos para calcular valorinventario
         
         echo number_format($inventariofinal, 0, '.', ',')."

          </td>
           <td>
          ";
         
       
         echo "$".number_format($valorunitario, 2, '.', ',')."

          </td>
           <td>
          ";
         $valortotalinventario=$valortotalinventario+$valortotal;
         echo "$".number_format($valortotal, 0, '.', ',')."
        
          </td>
        </tr>
         "  ; } ?>
        <tr>
            <td></td> 
            <td></td> 
            <td></td> 
            <td></td> 
            <td></td> 
            <td>VALOR TOTAL:</td> 
            <td><?php echo "$".number_format($valortotalinventario, 0, '.', ',');?></td> 
            
        </tr>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

