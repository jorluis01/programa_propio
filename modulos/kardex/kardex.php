<?php 
$fecha1=$_GET['fecha1'];
$fecha2=$_GET['fecha2'];
$valortotalinventario=0;
?>
<div class="fechabalance">
    <p style=" text-align: center"> FECHA1: <input name="fechaimformeplanta1" type="date" id="fechainformeplanta1"  > FECHA2: <input name="fechaimformeplanta2" type="date" id="fechainformeplanta2"  > </p>
    <p style=" text-align: center"><input name="buscarbalance" type="button" id="buscarcaja" value="Buscar" onclick="kardexinforme()" > 
</div>
<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">KARDEX PLANTA <?php echo $fecha1; ?> A <?php echo $fecha2; ?></h1> </p>
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
        $asopal=0;
        $servidumbre=0;
        $cargeplaya=0;
        $transporteplanta=0;
        $cantidadtransportado=0;
         $cantidadsalida=0;
         $valorunitarioresevo=0;
        $sql="select sum(asopal) as suma from transportematerial ";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $asopal= $rs['suma'];
         }
         $sql="select sum(servidumbre) as suma from transportematerial ";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $servidumbre= $rs['suma'];
         }
         $sql="select sum(valorcargeplaya) as suma from transportematerial ";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $cargeplaya= $rs['suma'];
         }
         $sql="select sum(valortransporte) as suma from transportematerial ";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $transporteplanta= $rs['suma'];
         }
         $valortotalmaterialgrudo=$asopal+$servidumbre+$cargeplaya+$transporteplanta;
        
         $sql="select sum(cantidad) as suma from transportematerial ";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $cantidadtransportado= $rs['suma'];
         }
         $valorcrudo=$valortotalmaterialgrudo/$cantidadtransportado;
          $sql="select sum(valorcarretaje) as suma from convertirmaterial ";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $valorcarretaje= $rs['suma'];
         }
         $sql="select sum(cantidadsalida) as suma from convertirmaterial ";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $cantidadsalida= $rs['suma'];
         }
         $carretaje=$valorcarretaje/$cantidadsalida;
         $transformado=$valorcrudo+$carretaje;
        $sql="select sum(cantidadsalida) as suma from convertirmaterial ";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $cantidadsalida= $rs['suma'];
         }
         $carretaje=$valorcarretaje/$cantidadsalida;
         $transformado=$valorcrudo+$carretaje;
         
         
         
         
         //resevo
         $sql="select sum(valortotal) as suma,sum(cantidad) as cantidad from compra,compra_producto where compra.idcompra=compra_producto.idcompra and compra_producto.idinventario like '14' ";
        
         $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $valorcompraresevo= $rs['suma'];
             $cantidad= $rs['cantidad'];
         }
         if ($valorcompraresevo==0){
             
         }
         else{
           $valorunitariocompra=$valorcompraresevo/$cantidad;
           
         }
         
         
         $sql="select sum(valorcargeplaya) as suma from compra,compra_producto,costoscompra where compra.idcompra=compra_producto.idcompra and compra_producto.idinventario like '14' and costoscompra.idcompra=compra.idcompra";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $valorcostocargeresevo= $rs['suma'];
         }
         
          $sql="select sum(valortransporte) as suma from compra,compra_producto,costoscompra where compra.idcompra=compra_producto.idcompra and compra_producto.idinventario like '14' and costoscompra.idcompra=compra.idcompra";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $valorcostotransporteresevo= $rs['suma'];
         }
          if ($valorcompraresevo==0){
             
         }
         else{
         $valorcostoscompra=$valorcostocargeresevo+$valorcostotransporteresevo;
         $valorunitariocosto=$valorcostoscompra/$cantidad;
         $valorunitarioresevo=$valorunitariocompra+$valorunitariocosto;
         
         
         //resevo 
         }
         
         
         
         $valorunitariopiedra=0;
         
         
         
         
         
         
         
         
         
         
         
          $sql="select sum(valortotal) as suma,sum(cantidad) as cantidad from compra,compra_producto where compra.idcompra=compra_producto.idcompra and compra_producto.idinventario like '18' ";
        
         $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $valorcomprapiedra= $rs['suma'];
             $cantidad= $rs['cantidad'];
         }
         if ($valorcomprapiedra==0){
             
         }
         else{
           $valorunitariocompra=$valorcomprapiedra/$cantidad;
           
         }
         
         
         $sql="select sum(valorcargeplaya) as suma from compra,compra_producto,costoscompra where compra.idcompra=compra_producto.idcompra and compra_producto.idinventario like '18' and costoscompra.idcompra=compra.idcompra";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $valorcostocargepiedra= $rs['suma'];
         }
         
          $sql="select sum(valortransporte) as suma from compra,compra_producto,costoscompra where compra.idcompra=compra_producto.idcompra and compra_producto.idinventario like '18' and costoscompra.idcompra=compra.idcompra";
        $dato= mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $valorcostotransportepiedra= $rs['suma'];
         }
          if ($valorcomprapiedra==0){
             
         }
         else{
         $valorcostoscompra=$valorcostocargepiedra+$valorcostotransportepiedra;
         $valorunitariocosto=$valorcostoscompra/$cantidad;
         $valorunitariopiedra=$valorunitariocompra+$valorunitariocosto;
         
         
         //rajona cambiar datos 
         }
         
        
       
        
        
        
        
        
        
        
        
        
        
        $sql="select * from inventario_producto,bodega,tipobodega,producto where inventario_producto.idbodega=bodega.idbodega and bodega.idtipobodega=tipobodega.idtipobodeba and bodega.idtipobodega like '11' and inventario_producto.idproducto=producto.idproducto";
        $dato=  mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){
             $valorunitario=0;
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
          $sql1="SELECT sum(cantidad) as cantidad FROM entrada_producto,inventario_producto where entrada_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='".$idproducto."' and entrada_producto.fecha < '".$fecha1."' and inventario_producto.idbodega like '16' ";
          $sql2="SELECT sum(cantidad) as cantidad FROM salida_producto,inventario_producto where salida_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='".$idproducto."' and salida_producto.fecha < '".$fecha1."' and inventario_producto.idbodega like '16' ";
          
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
          "; 
          $sql1="SELECT sum(cantidad) as cantidad FROM entrada_producto,inventario_producto where entrada_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=".$idproducto." and entrada_producto.fecha >= '".$fecha1."' and entrada_producto.fecha <= '".$fecha2."' ";
          
          $datos1=  mysqli_query($miconexion,$sql1);
             while($rs=mysqli_fetch_assoc($datos1)){
             echo number_format($rs["cantidad"], 0, '.', ',');
             $entradaproducto=$rs["cantidad"];
         }
         
         echo     "

          </td>
          <td>
          "; $sql2="SELECT sum(cantidad) as cantidad FROM salida_producto,inventario_producto where  salida_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=".$idproducto." and salida_producto.fecha >= '".$fecha1."' and salida_producto.fecha <= '".$fecha2."' and inventario_producto.idbodega like '16' ";;
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
             $valorunitario=$transformado;
             
         }
         if($nombreproducto=='crudo'){
             $valorunitario=$valorcrudo;
         }
         if($idproducto==10){
            $valorunitario=$valorunitarioresevo;
             
             if($valorunitarioresevo==0){
                 $valorunitario=6500;
                  
             }
             
         }
         if($idproducto==14){
            $valorunitario=$transformado;
             
             
             
         }
         if($nombreproducto=='piedra rajona'){
             $valorunitario=$valorunitariopiedra;
             
             if($valorunitariopiedra==0){
                 $valorunitario=6500;
                  
             }
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

