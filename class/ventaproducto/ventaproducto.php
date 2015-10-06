

<?php
class Venta_Producto
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM venta_producto";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
         public function seleccionarultimoid($miconexion){
            
            $sql="SELECT MAX(idventaproducto) as id  FROM venta_producto";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarventaproducto($miconexion,$datos){
             $sql="INSERT INTO venta_producto values('".$datos['idventa']."','".$datos['idproducto']."'"
                     . ",'".$datos['destino']."','".$datos['viajes']."',"
                     . "'".$datos['metros3']."','".$datos['totalmetros']."'"
                     . ",'".$datos['valorunitario']."','".$datos['valortotalproducto']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editararticulo($miconexion,$datos){
              
             $sql="update producto set nombreproducto='".$datos['nombre']."',descripcionproducto='".$datos['descripcion']."',valorventa='".$datos['valor']."' where idproducto='".$datos['id']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   


