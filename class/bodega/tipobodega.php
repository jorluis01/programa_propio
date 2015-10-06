<?php
       
        

class Tipobodega
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM tipobodega";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        public function seleccionarporid($miconexion,$dato){
            
            $sql="SELECT * FROM tipobodega where idtipobodeba='".$dato."' ";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }


        public function insertarbodega($miconexion,$datos){
             $sql="INSERT INTO tipobodega values('','".$datos['tipo']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editarbodega($miconexion,$datos){
              
             $sql="update tipobodega set tipo='".$datos['tipo']."' where idtipobodeba='".$datos['id']."'";
              mysqli_query($miconexion,$sql);
         }
     }
   