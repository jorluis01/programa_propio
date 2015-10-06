<div class="cliente">
    
    <p style="text-align: right"> <button class="boton" id="ventananuevoproducto"><img src="images/nuevo.png" style="width:40px; "></button></p>
    <center><table style="width: 600px; height: 56px;" border="1">
      <tbody>
        <tr>
            <td style="width: 150.65px;"><center>NOMBRE</center></td>
          <td style="width: 307.533px;"><center>DESCRIPCION</center></td>
          <td style="width: 200.067px;"><center>VALOR VENTA</center></td>
             
                <td style="width: 200.067px;"><center>EDITAR</center></td>
                
        </tr>
<?php

         include_once '../../class/articulo/articulo.php';
         include_once '../../class/conexion.php';
         $articulo=new Articulo();
        $tabla=$articulo->seleccionartodo($miconexion);
         while($rs=mysqli_fetch_array($tabla)){ 
        echo "
             <tr>
            
          <td class='nombreproducto".$rs["idproducto"]."'>".$rs["nombreproducto"]."<br>
          </td>
         
          <td class='descripcionproducto".$rs["idproducto"]."'>".$rs["descripcionproducto"]."<br>
          </td>
          <td class='valorventa".$rs["idproducto"]."'>".$rs["valorventa"]."<br>
          </td>
          <td>
          <img src='images/editar.png' class='editarproducto' id='".$rs["idproducto"]."'>
<br>
          </td>
        </tr>
         "  ;}
         
    ?>
    


