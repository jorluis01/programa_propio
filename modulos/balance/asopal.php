<?php
        
       
        include_once '../../class/conexion.php';
        $sql1="select sum(asopal) as asopal from venta where tipoventa=1 and fecha like '".$fecha."%' ";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $valor1=$rs["asopal"];
         }
         $sql1="select sum(asopal) as asopal from transportematerial where  fecha like '".$fecha."%'  ";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $valor2=$rs["asopal"];
         }
          $sql1="select sum(valor) as asopal from movimientoaja where tipomovimiento=4 and fecha like '".$fecha."%'  ";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $valor3=$rs["asopal"];
         }
         
         $valortotalasopal=$valor1+$valor2-$valor3;