<?php

require('conexion.php');
//Inicio la sesión
session_start();

///////////////////////////////////////////////////////////////////////////////////////////
//Si esta entrando en una seccion que no le corresponde
  
    $_SESSION["usuario"]="anonimo";
	$_SESSION["valido"]=0;

  if (isset($_POST['clave']) && isset($_POST['usuario']))
  {
  
  	//evito que haya colocado mas de una palabra en el login (para evitar sql injection)
	$usu = split(" ",trim($_POST['usuario']));

	echo $usu[0];
	
	//Guardo la identidad del cliente que desea autenticarse
    $_SESSION["usuario"]= $usu[0];
	
	$result = mysql_query("select clave from usuario where usuario='".$_SESSION["usuario"]."'");
	
	//Si encontre el usuario en la bd
	if(mysql_num_rows($result)==1)
	{
		$row = mysql_fetch_row($result);
		//Si los hash de la clave coinciden
		if($_POST['clave']==$row[0])
			$_SESSION["valido"]=1;
			
			echo $row[0] , ' = ' . $_POST['clave'];
	}
	
  } 
  
    //si no existe, envio a la página de autentificacion
    header("Location: micuenta.php");
    //ademas salgo de este script
    exit();
  
?>