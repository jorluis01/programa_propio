<h1 style="text-align: center">CONVERTIR MATERIAL</h1>

    <div id="materialaconvertir" style = "float: left;" >
         <h3>SALIDA</h3>
        NOMBRE: <input type="text" id="productoaconvertir" class="txttipo2"  />
        <p></p>
       
        BODEGA: <input type="text" id="bodegaproductoaconvertir" class="txttipo2"  />
     
        <p></p>
               CANTIDAD: <input type="text" id="cantidadproductoaconvertir" class="txttipo2"  />
                      
    </div>
    
    
    
        
        <div id="materialesaconvertir"style = "text-align: center">
            <h3>ENTRADA</h3>
              NOMBRE: <input type="text" id="productoaconvertir1" class="txttipo2"  />
                <p></p>
               BODEGA: <input type="text" id="bodegaproductoaconvertir1" class="txttipo2"  />
                
                <p></p>
               CANTIDAD: <input type="text" id="cantidadproductoaconvertir1" class="txttipo2"  />
               <p></p>
              <!--  NOMBRE: <input type="text" id="productoaconvertir2" class="txttipo2"  />
                <p></p>
               BODEGA: <input type="text" id="bodegaproductoaconvertir2" class="txttipo2"  />
               <p></p>
               CANTIDAD: <input type="text" id="bodegaproductoaconvertir1" class="txttipo2"  />
              
               <p></p>
               NOMBRE: <input type="text" id="productoaconvertir3" class="txttipo2"  />
                <p></p>
               BODEGA: <input type="text" id="bodegaproductoaconvertir3" class="txttipo2"  />
            <p></p>
               CANTIDAD: <input type="text" id="bodegaproductoaconvertir1" class="txttipo2"  />
              -->
            
        </div>   
<center><div style="clear: both">
        <p>&nbsp;</p>
        
        
        <table style="text-align: left; width: 469px; height: 100px;" border="0" cellpadding="2" cellspacing="2">

  <tbody>

    <tr>

      <td style="width: 378px;">PROVEEDOR CARRETAJE Y LAVADO:</td>

      <td style="width: 156px;">
          <select name="lista" id="idproveedorcarretaje">
          <option value="0">-------</option>
          <?php 
          include_once '../../class/conexion.php';
          $sql = "SELECT * from proveedor " ;
           $dato=  mysqli_query($miconexion,$sql);
            while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idproveedor'].'">'.$tabla['nombreproveedor'].'</option>';
       };
          ?>
          
      </select>

      </td>

    </tr>

    <tr>

      <td style="width: 378px;">VALOR CARRETAJE Y LAVADO:</td>

      <td style="width: 156px;"><input name="txto" id="valorcarretaje"></td>

      
      
      
    </tr>
    <tr>
        <td style="width: 378px;">CONCEPTO:</td>
<td style="width: 156px;"><TEXTAREA COLS=60 ROWS=10 NAME="Texto" id="conceptotransformacion"> 
</TEXTAREA></td>
    </tr>

  </tbody>
</table>
          <input type="submit" name="Submit2" value="CONVERTIR" id="guardarmaterialconvertir" />

</div>
<div>
<?php
include_once 'tablainventario.php';

?>


</div>
   
    
