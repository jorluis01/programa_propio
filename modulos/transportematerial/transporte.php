<h1 style="text-align: center">TRASLADO ENTRE BODEGAS</h1>
FECHA: <input name="fechatransportematerial" type="date" id="fechatransportematerial"  > 
    <div id="materialtransporte" style = "float: left;" >
         <h3>ORIGEN</h3>
        NOMBRE: <input type="text" id="productotransporte1" class="txttipo2"  />
        <p></p>
       
        BODEGA: <input type="text" id="bodegaproductotransporte1" class="txttipo2"  />
     
        <p></p>
        VIAJES: <input type="text" id="viajesproductotransporte1" class="txttipo2"  />
        <p></p>
        METROS: <input type="text" id="metrosproductotransporte1" class="txttipo2" onkeyup="multiplicaciontraslado()"  />
        <p></p>
        CANTIDAD: <input type="text" id="cantidadproductotransporte1" class="txttipo2"  />
                      
    </div>
    
    
    
        
        <div id="materialesaconvertir"style = "text-align: center">
            <h3>DESTINO</h3>
              NOMBRE: <input type="text" id="productotransporte2" class="txttipo2"  />
                <p></p>
               BODEGA: <input type="text" id="bodegaproductotransporte2" class="txttipo2"  />
                
                <p></p>
           <!--    CANTIDAD: <input type="text" id="cantidadproductoaconvertir1" class="txttipo2"  />
               <p></p>
              NOMBRE: <input type="text" id="productoaconvertir2" class="txttipo2"  />
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
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        
        <table style="text-align: left; width: 700px; height: 100px;" border="0" cellpadding="2" cellspacing="2">

  <tbody>
<tr>

      <td style="width: 378px;">ASOPAL M3:</td>

      <td style="width: 156px;">
          <input name="txto" id="valorasopal" value="1500">

      </td>
      <td style="width: 378px;">SERVIDUMBRE M3:</td>

      <td style="width: 156px;">
         <input name="txto" id="valoraservidumbre" value="1500">

      </td>

    </tr>
    <tr>

      <td style="width: 378px;">PROVEEDOR CARGE PLAYA:</td>

      <td style="width: 156px;">
          <select name="lista" id="idproveedorcargeplaya">
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
    <td style="width: 378px;">VALOR TOTAL:</td>

      <td style="width: 156px;"><input name="txto" id="valorcargeplaya" value="0"></td>
    </tr>
    <tr>

      <td style="width: 378px;">PROVEEDOR TRANSPORTE A PLANTA:</td>

      <td style="width: 156px;">
          <select name="lista" id="idproveedortransporteplanta">
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
    <td style="width: 378px;">VALOR TOTAL:</td>

    <td style="width: 156px;"><input name="txto" id="valortransporte" value="0"></td>
    </tr>

    <tr>

      

    </tr>

    

  </tbody>
</table>
           <input type="submit" name="Submit2" value="TRASLADAR" id="guardarmaterialtransporte" />

</div>
   
   
    
