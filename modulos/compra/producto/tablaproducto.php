
 <center><table style="width: 400px; height: 56px;" border="1">
      <tbody>
        <tr>
            <td style="width: 150.65px;"><center>NOMBRE</center></td>
          <td style="width: 307.533px;"><center>BODEGA</center></td>
          
          <td style="width: 200.067px;"><center>SELECCIONAR</center></td>
         
                
        </tr>
    <?php

         include_once '../../../class/inventario/inventario.php';
         include_once '../../../class/conexion.php';
         
          $id=$_GET['id'];

         
         if($id==0){
         $inventario=new Inventario();
         $tabla=$inventario->seleccionartodo($miconexion);
         
         }
         if($id>0){
       $inventario=new Inventario();
         $tabla=$inventario->seleccionartodoid($miconexion,$_GET);
         
         
         }
         
         while($rs=mysqli_fetch_array($tabla)){ 
        echo "
             <tr>
            
           <td class='productonombreinventario".$rs["idinventario_producto"]."'>".$rs["nombreproducto"]."<br>
          </td>
          <td class='bodegainventario".$rs["idinventario_producto"]."'>".$rs["nombrebodega"]."<br>
          </td>
          
          <td >
          <img src='images/selecciona.png' class='seleccionarcompraproducto' id='".$rs["idinventario_producto"]."'> 
<br>
          </td>
        </tr>
         "  ;}
         
    ?>


