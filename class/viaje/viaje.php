

<?php
class Viaje
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM producto";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarviaje($miconexion,$datos){
             $sql="INSERT INTO viaje values('','".$datos['proveedor']."','".$datos['venta']."','".$datos['valorm3']
                     ."','".$datos['totalmetros']."','".$datos['valorviaje']."','".$datos['costoviaje']."','".$datos['idvehiculo']."','".$datos['idconductor']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editararticulo($miconexion,$datos){
              
             $sql="update producto set nombreproducto='".$datos['nombre']."',descripcionproducto='".$datos['descripcion']."',valorventa='".$datos['valor']."' where idproducto='".$datos['id']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   


