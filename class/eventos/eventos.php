<?php
class Eventos
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            
            
           
        }
        public function seleccionarultimoid($miconexion){
            
            
            
           
        }
        


        public function insertareventos($miconexion,$idusuario,$evento){
             $sql="INSERT INTO usuarioeventos values('','".$idusuario."','".$evento."',CURRENT_TIMESTAMP)";
              mysqli_query($miconexion,$sql);
         }
         
          public function editararticulo($miconexion,$datos){
              
            
         }
     }
   



