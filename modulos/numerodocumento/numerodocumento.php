<?php
include_once '../../class/conexion.php';
$sql="select max(idnumerodocumento)as maximo from numerodocumento";
$dato=mysqli_query($miconexion,$sql);
while($rs=mysqli_fetch_array($dato)){ 
         $numeros= $rs['maximo'];
}

function llenar_ceros($numero,$ceros) {
  $dif = $ceros - strlen($numero); 
  for($m = 0 ;$m < $dif; $m++) 
  { 
    @$insertar_ceros .= 0;
  } 
  return $insertar_ceros .= $numero; 
}

echo llenar_ceros($numeros,8);