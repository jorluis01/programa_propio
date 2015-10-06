
 <center><table style="width: 400px; height: 56px;" border="1">
      <tbody>
        <tr>
            <td style="width: 150.65px;"><center>C.C/NIT</center></td>
          <td style="width: 307.533px;"><center>NOMBRE</center></td>
          <td style="width: 200.067px;"><center>TIPO</center></td>
          <td style="width: 200.067px;"><center>SELECCIONAR</center></td>
         
                
        </tr>
    <?php

         include_once '../../../class/proveedor/proveedor.php';
         include_once '../../../class/conexion.php';
         
          $id=$_GET['id'];

         
         if($id==0){
         $proveedor=new Proveedor();
         $tabla=$proveedor->seleccionartodo($miconexion);
         
         }
         if($id>0){
             $proveedor=new Proveedor();
         $tabla=$proveedor->seleccionartodoid($miconexion,$_GET);
         
         }
         
         while($rs=mysqli_fetch_array($tabla)){ 
        echo "
             <tr>
            
          <td class='nitproveedorcompra".$rs["idproveedor"]."'>".$rs["nitproveedor"]."<br>
          </td>
         
          <td class='nombreproveedorcompra".$rs["idproveedor"]."'>".$rs["nombreproveedor"]."<br>
          </td>
          <td class='nit".$rs["idproveedor"]."'>".$rs["tipoproveedor"]."<br>
          </td>
          <td class='nit".$rs["idproveedor"]."'>
          <img src='images/selecciona.png' class='seleccionarcompraproveedor' id='".$rs["idproveedor"]."'> 
<br>
          </td>
        </tr>
         "  ;}
         
    ?>


