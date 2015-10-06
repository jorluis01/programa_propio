
<?php
class Transporte_Material
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM transportematerial,inventario_producto,producto,bodega where inventario_producto.idbodega=bodega.idbodega and transportematerial.idinventarioproductosale=inventario_producto.idinventario_producto and inventario_producto.idproducto=producto.idproducto";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertartransportematerial($miconexion,$datos){
             $sql="INSERT INTO transportematerial values('','".$datos['producto1']."','".$datos['viajes']."','".$datos['metros']."','".$datos['cantidad1']."','".$datos['producto2']."','".$datos['asopal']."','".$datos['servidumbre']."','".$datos['idproveedorcarge']."','".$datos['valorcarge']."','".$datos['idproveedortransporte']."','".$datos['valortransporte']."','".$datos['fecha']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editararticulo($miconexion,$datos){
              
             $sql="update producto set nombreproducto='".$datos['nombre']."',descripcionproducto='".$datos['descripcion']."',valorventa='".$datos['valor']."' where idproducto='".$datos['id']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   




