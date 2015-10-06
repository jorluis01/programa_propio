

<?php
class ConvertirMaterial
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM producto";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarconvertirmaterial($miconexion,$datos){
             $sql="INSERT INTO convertirmaterial values('','".$datos['producto0']."','".$datos['cantidad0']."','".$datos['producto1']."','".$datos['cantidad1']."','".$datos['idproveedorcarretaje']."','".$datos['valorcarretaje']."','".$datos['fecha']."','".$datos['concepto']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editararticulo($miconexion,$datos){
              
             $sql="update producto set nombreproducto='".$datos['nombre']."',descripcionproducto='".$datos['descripcion']."',valorventa='".$datos['valor']."' where idproducto='".$datos['id']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   




