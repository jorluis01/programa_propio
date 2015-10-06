

<?php
class Proveedor
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM proveedor,tipoproveedor where proveedor.idtipoproveedor="
                    . "tipoproveedor.idtipoproveedor";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        public function seleccionartodoid($miconexion,$datos){
            
            $sql="SELECT * FROM proveedor,tipoproveedor where proveedor.idtipoproveedor="
                    . "tipoproveedor.idtipoproveedor and proveedor.nombreproveedor like'%".$datos['nombre']."%'";
            
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarproveedor($miconexion,$datos){
             $sql="INSERT INTO proveedor values('','".$datos['nombre']."','".$datos['telefono']."','".$datos['nit']."','".$datos['tipo']."')";
             echo $sql;
              mysqli_query($miconexion,$sql);
         }
          public function editarproveedor($miconexion,$datos){
              
             $sql="update proveedor set nombreproveedor='".$datos['nombre']."',telefonoproveedor='".$datos['telefono']."'"
                     . ",nitproveedor='".$datos['nit']."',idtipoproveedor='".$datos['tipo']."' where idproveedor='".$datos['id']."'";
             mysqli_query($miconexion,$sql);
         }
     }
   


