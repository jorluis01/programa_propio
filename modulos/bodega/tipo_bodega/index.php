
<div class="tipobodega">
    <p style="text-align: right"> <button class="boton" id="ventananuevotipobodega"><img src="images/nuevo.png" style="width:40px; "></button></p>
    <center><table style="width: 600px; height: 56px;" border="1">
      <tbody>
        <tr>
            
          <td style="width: 307.533px;"><center>TIPO</center></td>
          <td style="width: 200.067px;"><center>EDITAR</center></td>
        </tr>
        <?php
        include_once '../../../class/bodega/tipobodega.php';
        include_once '../../../class/conexion.php';
        $tipobodega=new Tipobodega();
        $tabla=$tipobodega->seleccionartodo($miconexion);
         while($rs=mysqli_fetch_array($tabla)){ 
        echo "
             <tr>
            
          
          <td class='tipobodega".$rs["idtipobodeba"]."'>".$rs["tipo"]."<br>
          </td>
          <td>
          <img src='images/editar.png' class='editartipobodega' id='".$rs["idtipobodeba"]."'>
<br>
          </td>
        </tr>
         "  ; } ?>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     <input type="submit" name="submit" id="cancelarbodega" value="Cancelar" />
     </p>
</div>





