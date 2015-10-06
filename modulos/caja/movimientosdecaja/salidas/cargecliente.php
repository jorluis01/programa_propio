<?PHP

?>
<div class="tipobodega">
    <p style="text-align: center"><h1 style="text-align: center">CARGE AL CLIENTE </h1> </p>
    <center><table style="width: 300px; height: 56px;" border="1">
      <tbody>
        <tr>
         
          <td style="width: 307.533px;"><center>NOMBRECLIENTE</center></td>
          <td style="width: 307.533px;"><center>VALOR</center></td>
          
           <td><center></center></td>
          
        </tr>
       
        <?php
        
       
        include_once '../../../../class/conexion.php';
        $sql1="select * from proveedor ";    
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            $idcliente=$rs['idproveedor'];
            $sql="select SUM(cargeclente) as valor from venta where idproveedorcargecliente=".$idcliente;
            
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valor=$rs2['valor'];
         }
          $sql="select SUM(valor) as valor from movimientoaja where idclienteproveedor='".$idcliente."' and tipomovimiento='8'" ;
           
            $dato1=  mysqli_query($miconexion,$sql);
         while($rs2=mysqli_fetch_array($dato1)){
             $valorresta=$rs2['valor'];
         }
         $valortotal=$valor-$valorresta;
        echo "
             <tr>
           
          <td >
          ".$rs["nombreproveedor"]."
          </td>
          <td>
          ".$valortotal."

          </td>
         
          <td>
          <center>"; ?> <button id="<?php echo$rs["idproveedor"]; ?>" onclick="cogeridcuentapagar($(this).attr('id'))" >SELECCIONAR</button></center>
<?php
echo "
          </td>
         
        </tr>
         "  ; } ?>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

