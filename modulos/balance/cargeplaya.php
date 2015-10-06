<?php
        
       
        include_once '../../class/conexion.php';
         $sql="select SUM(valorcargeplaya) as valor from transportematerial where fecha like '".$fecha."%' ";
            
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor=$rs2['valor'];
         }
          $sql="select SUM(valor) as valor from movimientoaja where tipomovimiento='6' and fecha like '".$fecha."%'" ;
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valorresta=$rs2['valor'];
         }
          $sql="select SUM(valorcargeplaya) as valor from compra,costoscompra where costoscompra.idcompra=compra.idcompra and fecha like '".$fecha."%' " ;
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor2=$rs2['valor'];
         }
         $valortotalcargeplaya=$valor-$valorresta+$valor2;