<?php

include_once '../conexion.php';
$sql = "SELECT * from municipio WHERE departamento_iddepartamento=".$_GET['id'];
$dato=  mysqli_query($miconexion,$sql);
if($_GET['id']==0){
   echo "<option value='0'>-----</option>";
}
while ($tabla = mysqli_fetch_array($dato)) {
        echo '<option value="'.$tabla['idmunicipio'].'">'.$tabla['nombreMunicipio'].'</option>';
    };