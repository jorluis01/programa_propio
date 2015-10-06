<center>
   <p class="txttipo2">NOMBRE: <input type="text" id="nombreproveedor" class="txttipo2"  />
        </p>
        <p class="txttipo2">TELEFONO: <input type="text" id="telefonoproveedor" class="txttipo2"  />
        </p>
        <p class="txttipo2">NIT: <input type="text" id="nitproveedor" class="txttipo2"  />
        </p><p>
        TIPO PROVEEDOR: <select name="tipoproveedor" id="tipoproveedor">
        <?php
         include_once '../../class/conexion.php';
$sql = "SELECT * from tipoproveedor" ;
$dato=  mysqli_query($miconexion,$sql);
while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idtipoproveedor'].'">'.$tabla['tipoproveedor'].'</option>';
       };
         
         ?>
           </select>
        </p> 
        <p>
        <input type="submit" name="submit" id="guardarproveedor" value="Guardar" />



