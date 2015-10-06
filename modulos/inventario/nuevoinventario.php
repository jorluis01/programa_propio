<center>
PRODUCTO:
<select name="bodegainventrioproducto" id="bodegainventrioproducto">
<?php
         include_once '../../class/conexion.php';
$sql = "SELECT * from producto " ;
$dato=  mysqli_query($miconexion,$sql);
while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idproducto'].'">'.$tabla['nombreproducto'].'</option>';
       };
         
         ?>
     </select> 
    <p class="txttipo2">
BODEGA:
<select name="bodegainventriobodega" id="bodegainventriobodega">
    <?php
         
$sql = "SELECT * from bodega " ;
$dato=  mysqli_query($miconexion,$sql);
while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idbodega'].'">'.$tabla['nombrebodega'].'</option>';
       };
         
         ?>
    
     </select> 
    </p>
    <input type="submit" name="submit" id="guardarinventario" value="Guardar" />