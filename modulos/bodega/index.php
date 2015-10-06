<div class="bodega">
    
    <p style="text-align: right"> <button class="boton" id="ventananuevabodega"><img src="images/nuevo.png" style="width:40px; "></button></p>
    <center><table style="width: 600px; height: 56px;" border="1">
      <tbody>
        <tr>
            <td style="width: 150.65px;"><center>NOMBRE</center></td>
          <td style="width: 307.533px;"><center>MUNICIPIO</center></td>
          <td style="width: 200.067px;"><center>DIRECCION</center></td>
             <td style="width: 200.067px;"><center>TIPO BODEGA</center></td>
                <td style="width: 200.067px;"><center>EDITAR</center></td>
                
        </tr>
         <?php
         include_once '../../class/bodega/bodega.php';
         include_once '../../class/conexion.php';
         $bodega=new Bodega();
        $tabla=$bodega->seleccionartodo($miconexion);
         while($rs=mysqli_fetch_array($tabla)){ 
        echo "
             <tr>
            
          <td class='nombrebodega".$rs["idbodega"]."'>".$rs["nombrebodega"]."<br>
          </td>
          <td class='".$rs["nombreMunicipio"]."'>".$rs["nombreMunicipio"]."<br>
          </td>
          <td class='direccionbodega".$rs["idbodega"]."'>".$rs["direccionbodega"]."<br>
          </td>
          <td class='".$rs["tipo"]."'>".$rs["tipo"]."<br>
          </td>
          <td>
          <img src='images/editar.png' class='editarbodega' id='".$rs["idbodega"]."'>
<br>
          </td>
        </tr>
         "  ;}
         
    ?>
    
    
    
    
    
    
    
</div>