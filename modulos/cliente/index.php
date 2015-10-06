<div class="cliente">
    
    <p style="text-align: right"> <button class="boton" id="ventananuevocliente"><img src="images/nuevo.png" style="width:40px; "></button></p>
    <center><table style="width: 600px; height: 56px;" border="1">
      <tbody>
        <tr>
            <td style="width: 150.65px;"><center>NOMBRE</center></td>
          <td style="width: 307.533px;"><center>TELEFONO</center></td>
          <td style="width: 200.067px;"><center>C.C/NIT</center></td>
             
                <td style="width: 200.067px;"><center>MODIFICAR</center></td>
                
        </tr>
<?php

         include_once '../../class/cliente/cliente.php';
         include_once '../../class/conexion.php';
         $cliente=new Cliente();
        $tabla=$cliente->seleccionartodo($miconexion);
         while($rs=mysqli_fetch_array($tabla)){ 
        echo "
             <tr>
            
          <td class='nombrecliente".$rs["idcliente"]."'>".$rs["nombrecliente"]."<br>
          </td>
         
          <td class='telefono".$rs["idcliente"]."'>".$rs["telefonocliente"]."<br>
          </td>
          <td class='nit".$rs["idcliente"]."'>".$rs["nitcliente"]."<br>
          </td>
          <td>
          <img src='images/editar.png' class='editarcliente' id='".$rs["idcliente"]."'>
<br>
          </td>
        </tr>
         "  ;}
         
    ?>
    
