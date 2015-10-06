<div class="cliente">
    
    <p style="text-align: right"> <button class="boton" id="ventananuevoproveedor"><img src="images/nuevo.png" style="width:40px; "></button></p>
    <center><table style="width: 600px; height: 56px;" border="1">
      <tbody>
        <tr>
            <td style="width: 150.65px;"><center>NOMBRE</center></td>
          <td style="width: 307.533px;"><center>TELEFONO</center></td>
          <td style="width: 200.067px;"><center>C.C/NIT</center></td>
          <td style="width: 200.067px;"><center>TIPO PROVEEDOR</center></td>
             
                <td style="width: 200.067px;"><center>EDITAR</center></td>
                
        </tr>
<?php

         include_once '../../class/proveedor/proveedor.php';
         include_once '../../class/conexion.php';
         $proveedor=new Proveedor();
        $tabla=$proveedor->seleccionartodo($miconexion);
         while($rs=mysqli_fetch_array($tabla)){ 
        echo "
             <tr>
            
          <td class='nombreproveedor".$rs["idproveedor"]."'>".$rs["nombreproveedor"]."<br>
          </td>
         
          <td class='telefono".$rs["idproveedor"]."'>".$rs["telefonoproveedor"]."<br>
          </td>
          <td class='nit".$rs["idproveedor"]."'>".$rs["nitproveedor"]."<br>
          </td>
          <td >".$rs["tipoproveedor"]."<br>
          </td>
          <td>
          <img src='images/editar.png' class='editarproveedor' id='".$rs["idproveedor"]."'>
<br>
          </td>
        </tr>
         "  ;}
         
    ?>
    

