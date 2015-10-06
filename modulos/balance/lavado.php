<?php
        
       
        include_once '../../class/conexion.php';
        $sql="select SUM(valorcarretaje) as valor from convertirmaterial where fecha like '".$fecha."%'  ";
            
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor=$rs2['valor'];
         }
          $sql="select SUM(valor) as valor from movimientoaja where tipomovimiento='9' and fecha like '".$fecha."%' " ;
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valorresta=$rs2['valor'];
         }
         $valortotallavado=$valor-$valorresta;