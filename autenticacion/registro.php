<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - Ejemplo de autentiacion</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
<script type="text/javascript" language="JavaScript1.2" src="sha1.js"></script>
<script language="JavaScript">
function ec()
	{

		if(document.getElementById('clave').value == document.getElementById('clave2').value)
		{
	  		document.getElementById('clave').value = hex_sha1(document.getElementById('clave').value);
			document.getElementById('clave2').value = "";
			return true;
		}
		else
		{
			alert('Las claves no coinciden');
			return false;
		}
	}
</script>
</head>

<body>
<table width="74%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><p>&nbsp;</p>
        <p class="style1">Registro de usuario con Hash Sha-1</p>
    <p>La clave que el usuario introduzca en el el campo &quot;clave&quot; del formulario será transformada con el algoritmo Sha-1 y luego será enviada al servidor.</p></td>
  </tr>
  <tr>
    <td height="277" align="center" valign="top"><p align="left"><br />
    </p>
        <p align="center"></p>
    <form id="form1" name="form1" method="post" action="registrado.php">
          <p><strong>Introduce tu usuario y clave que desees</strong></p>
          <p>Usuario: 
            <input type="text" name="usuario" id="usuario" />
          </p>
          <p>Clave: 
            <input type="password" name="clave" id="clave" />
          </p>
          <p>Repite la clave:
            <input type="password" name="clave2" id="clave2" />
</p>
          <p>si ya tienes cuenta haz <a href="login.php">click aqui</a></p>
          <p>
            <input name="button" type="submit" id="button" onclick="return ec();" value="Registrarme"/>
        </p>
      </form>      <p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td height="19" align="center" valign="bottom">Alejandro Sánchez - http://internetdeveloping.blogspot.com/</td>
  </tr>
</table>
</body>
</html>
