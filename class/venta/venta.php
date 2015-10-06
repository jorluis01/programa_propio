

<?php
class Venta
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM venta";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
         public function seleccionarultimoid($miconexion){
            
            $sql="SELECT MAX(idventa) as id  FROM venta";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarventa($miconexion,$datos){
             $sql="INSERT INTO venta values('','".$datos['fecha']."','".$datos['documento']."'"
                     . ",'".$datos['tipoventa']."','".$datos['id']."',"
                     . "'".$datos['servidumbre']."','".$datos['asopal']."'"
                     . ",'".$datos['cargeplaya']."','".$datos['transporteplanta']."','".$datos['cargecliente']."','".$datos['carretaje']."'"
                     
                     . ",'".$datos['vale']."','".$datos['comision1']."','".$datos['comision2']."'"
                     . ",'".$datos['comision3']."','".$datos['costoventa']."'"
                     . ",'".$datos['valorventa']."','0','0')";
              mysqli_query($miconexion,$sql);
         }
          public function editarventa($miconexion,$datos){
              
             $sql="update venta set idproveedorcargecliente='".$datos['idproveedorcarge']."' where idventa='".$datos['idventa']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
         public function editarventaplaya($miconexion,$datos){
              
             $sql="update venta set idproveedorcargeplaya='".$datos['idproveedorcarge']."' where idventa='".$datos['idventa']."'";
             
            
             mysqli_query($miconexion,$sql);
         }
     }
   


