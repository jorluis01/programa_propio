<?php

//Inicio la sesión
session_start();

//Verifico si es un usuario autenticado
if ($_SESSION["valido"]!=1) 
{//quiere decir que tiene prohibida la entrada a cualquier lugar privado

    //si no existe, envio a la página de autentificacion
    header("Location: login.php");
    //ademas salgo de este script
    exit();
}
?>