<?php
$nombre=$_GET['nombre'];
$fecha1=$fecha=$_GET['fecha1'];
$fecha2=$fecha=$_GET['fecha2'];
$nombreplanilla="".$nombre."".$fecha1."&".$fecha2.".xls";
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=".$nombreplanilla);
header("Pragma: no-cache");
header("Expires: 0");
echo $_POST['datos_a_enviar'];
?>


