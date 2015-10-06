<?php
$dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'datosalirio';
      $miconexion=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
        if (mysqli_connect_errno())
       {echo "No se ha podido conectar a MySQL por el siguiente error: " . mysqli_connect_error();} 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

