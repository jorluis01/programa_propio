
<?php
class Costo_compra
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM cliente";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
         public function seleccionartodoid($miconexion,$datos){
            
            $sql="SELECT * FROM cliente where nombrecliente like'%".$datos['nombre']."%'";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarcostoscompra($miconexion,$datos){
             $sql="INSERT INTO costoscompra values('','".$datos['idcompra']."','".$datos['idproveedorcarge']."','".$datos['valorcarge']."','".$datos['idproveedortransporte']."','".$datos['valortransporte']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editarcliente($miconexion,$datos){
              
             $sql="update cliente set nombrecliente='".$datos['nombre']."',telefonocliente='".$datos['telefono']."',nitcliente='".$datos['nit']."' where idcliente='".$datos['id']."'";
             mysqli_query($miconexion,$sql);
         }
     }
   
