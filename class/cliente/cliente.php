

<?php
class Cliente
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM cliente ORDER BY nombrecliente ASC";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
         public function seleccionartodoid($miconexion,$datos){
            
            $sql="SELECT * FROM cliente where nombrecliente like'%".$datos['nombre']."%'";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarcliente($miconexion,$datos){
             $sql="INSERT INTO cliente values('','".$datos['nombre']."','".$datos['telefono']."','".$datos['nit']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editarcliente($miconexion,$datos){
              
             $sql="update cliente set nombrecliente='".$datos['nombre']."',telefonocliente='".$datos['telefono']."',nitcliente='".$datos['nit']."' where idcliente='".$datos['id']."'";
             mysqli_query($miconexion,$sql);
         }
     }
   
