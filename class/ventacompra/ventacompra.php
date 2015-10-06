
<?php
class Ventacompra
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM venta";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
         public function seleccionarultimoid($miconexion){
            
            $sql="SELECT MAX(idventa) as id  FROM venta";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarventacompra($miconexion,$datos){
             $sql="INSERT INTO ventacompra values('','".$datos['idcompra']."'"
                     . ",'".$datos['cantidad']."','".$datos['fecha']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editararticulo($miconexion,$datos){
              
             $sql="update producto set nombreproducto='".$datos['nombre']."',descripcionproducto='".$datos['descripcion']."',valorventa='".$datos['valor']."' where idproducto='".$datos['id']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   


