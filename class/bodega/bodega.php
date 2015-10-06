<?php
class Bodega
{
     public function  __construct() {
        

        }
        public function seleccionartodo($miconexion){
            
            $sql="SELECT * FROM bodega,municipio,tipobodega where bodega.idmunicipio=municipio.idmunicipio and bodega.idtipobodega=tipobodega.idtipobodeba";
        
        $dato=  mysqli_query($miconexion,$sql);
        return $dato;
            
           
        }
        


        public function insertarbodega($miconexion,$datos){
             $sql="INSERT INTO bodega values('','".$datos['nombrebodega']."','".$datos['idmunicipio']."','".$datos['direccion']."','".$datos['idtipobodega']."')";
              mysqli_query($miconexion,$sql);
         }
          public function editarbodega($miconexion,$datos){
              
             $sql="update bodega set nombrebodega='".$datos['nombrebodega']."',idmunicipio='".$datos['idmunicipio']."',direccionbodega='".$datos['direccion']."',idtipobodega='".$datos['idtipobodega']."' where idbodega='".$datos['id']."'";
              mysqli_query($miconexion,$sql);
         }
     }
   