<?php
$valortotalinventario=0;
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
         
         
         
         



$sql="select * from inventario_producto,bodega,tipobodega,producto where inventario_producto.idbodega=bodega.idbodega and bodega.idtipobodega=tipobodega.idtipobodeba and tipobodega.tipo like 'planta' and inventario_producto.idproducto=producto.idproducto";
        $dato=  mysqli_query($miconexion,$sql);
         while($rs=mysqli_fetch_array($dato)){ 
             $idproducto=$rs["idproducto"];
             $entradaproducto;
             $salidaproducto;
             $descripcionproducto=$rs['descripcionproducto'];
             $nombreproducto=$rs["nombreproducto"];
          $sql1="SELECT sum(cantidad) as cantidad FROM entrada_producto,inventario_producto where entrada_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='".$idproducto."' and entrada_producto.fecha like '".$fecha."%' and inventario_producto.idbodega like '16' ";
          $sql2="SELECT sum(cantidad) as cantidad FROM salida_producto,inventario_producto where salida_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto='".$idproducto."' and salida_producto.fecha like '".$fecha."%' and inventario_producto.idbodega like '16' ";
          
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
         
        $sql1="SELECT sum(cantidad) as cantidad FROM entrada_producto,inventario_producto where entrada_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=".$idproducto." and entrada_producto.fecha like '".$fecha."%' ";
           
          $datos1=  mysqli_query($miconexion,$sql1);
             while($rs=mysqli_fetch_assoc($datos1)){
             
             $entradaproducto=$rs["cantidad"];
         }
         
         
         $sql2="SELECT sum(cantidad) as cantidad FROM salida_producto,inventario_producto where  salida_producto.idinventario_producto=inventario_producto.idinventario_producto and inventario_producto.idproducto=".$idproducto." and salida_producto.fecha like '".$fecha."%' and inventario_producto.idbodega like '16' ";;
               $datos2=  mysqli_query($miconexion,$sql2);
             while($rs=mysqli_fetch_assoc($datos2)){
            
             $salidaproducto=$rs["cantidad"];
         }
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
         //echo $inventariofinal."-";
         $valortotalinventario=$valortotalinventario+$valortotal;
         
}

             
             
        
             
                
             
        
         