<?PHP

?>
<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">ASOPAL </h1> </p>
    <center><table style="width: 300px; height: 56px;" border="1">
      <tbody>
        <tr>
         
          <td style="width: 307.533px;"><center></center></td>
          <td style="width: 307.533px;"><center>VALOR</center></td>
          
           <td><center></center></td>
          
        </tr>
       
        <?php
        
       
        include_once '../../../../class/conexion.php';
        $sql1="select sum(asopal) as asopal from venta where tipoventa=1 ";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $valor1=$rs["asopal"];
         }
         $sql1="select sum(asopal) as asopal from transportematerial  ";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $valor2=$rs["asopal"];
         }
          $sql1="select sum(valor) as asopal from movimientoaja where tipomovimiento=4  ";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $valor3=$rs["asopal"];
         }
         
         $valortotal=$valor1+$valor2-$valor3;
                 
        echo "
             <tr>
           
          <td >
          ASOPAL
          </td>
          <td>
          ".$valortotal."

          </td>
         
          <td>
          <center>"; ?> <button id="0" onclick="cogeridasopal()" >SELECCIONAR</button></center>
<?php
echo "
          </td>
         
        </tr>
         "  ;  ?>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

