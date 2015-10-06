
 <center><table style="width: 400px; height: 56px;" border="1">
      <tbody>
        <tr>
            <td style="width: 150.65px;"><center>NOMBRE</center></td>
          <td style="width: 307.533px;"><center>NIT</center></td>
          
          <td style="width: 200.067px;"><center>SELECCIONAR</center></td>
         
                
        </tr>
    <?php

         include_once '../../../../class/cliente/cliente.php';
         include_once '../../../../class/conexion.php';
         
          
       $cliente=new Cliente();
         $tabla=$cliente->seleccionartodo($miconexion,$_GET);
         
         
         
         
         while($rs=mysqli_fetch_array($tabla)){ 
        echo "
             <tr>
            
           <td class='nombrecliente".$rs["idcliente"]."' >".$rs["nombrecliente"]."<br>
          </td>
          <td >".$rs["nitcliente"]."<br>
          </td>
          
          <td >
          <img src='images/selecciona.png' class='seleccionarclientefiltrada' id='".$rs["idcliente"]."'> 
<br>
          </td>
        </tr>
         "  ;}
         
    ?>


