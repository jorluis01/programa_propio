<div class="tipobodega">
    <p style="text-align: right"> <button class="boton" id="ventananuevoinventario"><img src="images/nuevo.png" style="width:40px; "></button></p>
    <center>
        </div>
      <center>  <div class="tablaprincipal"> <table style="width: 600px; height: 56px;" border="1">
<center>      
<tbody>
        <tr>
            
          <td style="width: 307.533px;"><center>PRODUCTO</center></td>
          <td style="width: 200.067px;"><center>BODEGA</center></td>
          <td style="width: 200.067px;"><center>EDITAR</center></td>
        </tr>
        <?php
        include_once '../../class/inventario/inventario.php';
        include_once '../../class/conexion.php';
        $inventario=new Inventario();
        $tabla=$inventario->seleccionartodo($miconexion);
         while($rs=mysqli_fetch_array($tabla)){ 
        echo "
             <tr>
            
          
          <td class='productonombreinventario".$rs["idinventario_producto"]."'>".$rs["nombreproducto"]."<br>
          </td>
          <td class='bodegainventario".$rs["idinventario_producto"]."'>".$rs["nombrebodega"]."<br>
          </td>
          <td>
          <img src='images/editar.png' class='editarinventario' id='".$rs["idinventario_producto"]."'>
<br>
          </td>
        </tr>
         "  ; } ?>
      </tbody>
    </table>  
    <p style="text-align: right">
        
     
     </p>
</div>

