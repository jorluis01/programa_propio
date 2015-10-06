<?php

require('conexion.php');

if(isset($_POST['usuario']) && isset($_POST['clave']))
{

	$usuario = $_POST['usuario'];
	$sha1_clave = $_POST['clave'];

	mysql_query("insert into usuario values('','".$usuario."','".$sha1_clave."')");

}
else
{

	$usuario = "error";
	$sha1_clave = "error";

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - Ejemplo de autentiacion</title>
<style type="text/css">
<!--
.style1 {	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="74%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><p>&nbsp;</p>
        <p class="style1">Usuario registrado</p></td>
  </tr>
  <tr>
    <td height="277" align="center" valign="top"><p align="left"><br />
    </p>
        <p align="left"></p>
      <form id="form1" name="form1" method="post" action="">
          <p><strong>El usuario ha sido correctamente registrado.</strong></p>
      </form>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="30%"><div align="right">Nombre de usuario:</div></td>
          <td width="70%"><div align="center"><?php echo $usuario ?></div></td>
        </tr>
        <tr>
          <td><div align="right">Clave:</div></td>
          <td><div align="center"><?php echo $sha1_clave ?></div></td>
        </tr>
      </table>
    <p align="center">Para acceder a tu cuenta haz <a href="login.php">click aqui</a></p></td>
  </tr>
  <tr>
    <td height="19" align="center" valign="bottom">Alejandro Sánchez - http://internetdeveloping.blogspot.com/</td>
  </tr>
</table>
</body>
</html>
