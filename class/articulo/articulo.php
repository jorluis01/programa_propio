

<?php
class Articulo
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM producto";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertararticulo($miconexion,$datos){
             $sql="INSERT INTO producto values('','".$datos['nombre']."','".$datos['descripcion']."','".$datos['valor']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editararticulo($miconexion,$datos){
              
             $sql="update producto set nombreproducto='".$datos['nombre']."',descripcionproducto='".$datos['descripcion']."',valorventa='".$datos['valor']."' where idproducto='".$datos['id']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   


