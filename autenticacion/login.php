<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
	  	document.getElementById('clave').value = hex_sha1(document.getElementById('clave').value);
	}
</script>
</head>

<body>
<table width="74%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><p>&nbsp;</p>
        </td>
  </tr>
  <tr>
    <td height="277" align="center" valign="top"><p align="left"><br />
    </p>
        <p align="center"></p>
        <form id="form1" name="form1" method="post" action="autenticacion.php" onsubmit="ec()">
          <p><strong>Introduce los datos de tu cuenta</strong></p>
          <p>Usuario: 
            <input type="text" name="usuario" id="usuario" />
          </p>
          <p>Clave: 
            <input type="password" name="clave" id="clave" />
          </p>
         <!-- <p>si no tienes cuenta haz <a href="registro.php">click aqui</a></p>-->
    <p>
            <input type="submit" name="button" id="button" value="Enviar" />
          </p>
      </form>      <p align="center">&nbsp;</p></td>
  </tr>
  <tr>
    <td height="19" align="center" valign="bottom"></td>
  </tr>
</table>
</body>
</html>
