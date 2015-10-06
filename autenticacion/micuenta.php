<?php

//Incluyo el archivo de sesion para impedir el acceso no autorizado a esta página.
require('sesion.php');
header("Location: ../index.php");
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
        <p class="style1">Autenticacion Básica</p></td>
  </tr>
  <tr>
    <td height="277" align="center" valign="top"><p align="left"><br />
    </p>
        <p align="left"></p>
      <form id="form1" name="form1" method="post" action="">
          <p><strong>Si ves esta pagina, tu sesion ha sido validada y puedes navegar por la zona privada.</strong></p>
          <p>haz <a href="cerrar_sesion.php">click aqui</a> para cerrar tu sesion</p>
      </form>
      <p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td height="19" align="center" valign="bottom">Alejandro Sánchez - http://internetdeveloping.blogspot.com/</td>
  </tr>
</table>
</body>
</html>
