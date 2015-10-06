

<?php
class Movimientocaja
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
        


        public function insertarmovimiento($miconexion,$datos){
             $sql="INSERT INTO movimientoaja values('".$datos['id']."','".$datos['tipomovimiento']."','".$datos['id']."','".$datos['idclienteproveedor']."','".$datos['concepto']."','".$datos['valor']."','".$datos['fecha']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editarcliente($miconexion,$datos){
              
             $sql="update cliente set nombrecliente='".$datos['nombre']."',telefonocliente='".$datos['telefono']."',nitcliente='".$datos['nit']."' where idcliente='".$datos['id']."'";
             mysqli_query($miconexion,$sql);
         }
     }
   
