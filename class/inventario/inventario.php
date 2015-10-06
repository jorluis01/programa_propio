

<?php
class Inventario
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM inventario_producto,producto,bodega where inventario_producto.idproducto="
                    . "producto.idproducto and inventario_producto.idbodega=bodega.idbodega";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
          public function seleccionartodoid($miconexion,$datos){
            
            $sql="SELECT * FROM inventario_producto,producto,bodega where inventario_producto.idproducto="
                    . "producto.idproducto and inventario_producto.idbodega=bodega.idbodega and producto.nombreproducto like'%".$datos['nombre']."%'";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        
        


        public function insertararticuloinventario($miconexion,$datos){
             $sql="INSERT INTO inventario_producto values('','".$datos['producto']."','".$datos['bodega']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editararticuloinventario($miconexion,$datos){
              
             $sql="update inventario_producto set idproducto='".$datos['producto']."',idbodega='".$datos['bodega']."' where idinventario_producto='".$datos['id']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   


