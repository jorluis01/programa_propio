

<?php
class Compra_producto
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM producto";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarcompraproducto($miconexion,$datos){
             $sql="INSERT INTO compra_producto values('".$datos['idcompra']."','".$datos['idproducto']."',"
                     . "'".$datos['viajes']."','".$datos['metros']."','".$datos['valorunitario']."',"
                     . "'".$datos['cantidad']."','".$datos['valortotal']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editararticulo($miconexion,$datos){
              
             $sql="update producto set nombreproducto='".$datos['nombre']."',descripcionproducto='".$datos['descripcion']."',valorventa='".$datos['valor']."' where idproducto='".$datos['id']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   


