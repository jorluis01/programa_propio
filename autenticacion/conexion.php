
<?php
/* conexion ****************/
// conectamos al servidor MySQL
$link = mysql_connect('localhost', 'root', '');
if(!$link) {
die("Error al intentar conectar: ".mysql_error());
}
// seleccionamos la base de datos
$db_link = mysql_select_db('datosalirio', $link);
if(!$db_link) {
die('Error al intentar seleccionar la base de datos'. mysql_error());
}
/* fin conexion ************/

?>