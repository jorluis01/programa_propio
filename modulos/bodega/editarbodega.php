<center>
   <p class="txttipo2">NOMBRE: <input type="text" id="nombrebodega" class="txttipo2"  />
        </p>
        <p class="txttipo2"> 
          DEPARTAMENTO:  <select name="departamento" id="departamento"> 
              <option value="0">-----</option>
         <?php
         include_once '../../class/conexion.php';
$sql = "SELECT * from departamento " ;
$dato=  mysqli_query($miconexion,$sql);
while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['iddepartamento'].'">'.$tabla['nombredepartamento'].'</option>';
       };
         
         ?>
   </select>   
            
        </p>
         <p class="txttipo2">
        MUNICIPIO:<select name="municipio" id="municipio">
              <option value="0">-----</option>
                 </select> 
             </p>
        <p class="txttipo2">DIRECCION: <input type="text" id="direccionbodega" class="txttipo2"  />
        </p>     
         <p class="txttipo2">
       TIPO BODEGA: <select name="tipobodega" id="tipobodebodega">
              <?php
         
$sql = "SELECT * from tipobodega " ;
$dato=  mysqli_query($miconexion,$sql);
while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idtipobodeba'].'">'.$tabla['tipo'].'</option>';
       };
         
         ?>
                 </select> 
             </p>    
        <input type="submit" name="submit" id="editarbodega" value="Guardar" />
    
    
</center>


<?php

