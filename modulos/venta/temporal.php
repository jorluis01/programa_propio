

<center>
<div align="center">FECHA<br />
      <input name="fechaventa" type="date" id="fechaventa"  > 
      
    <div align="center"> NUMERO REMISION<br />
        <input type="text" name="textfield" id="numeroventadocumento" onkeypress="return justNumbers(event);" onkeyup="espacionumericovacio($(this).attr('id'));"/>
    </div>
      <div align="center">TIPO VENTA <br />
                 <select name="select2" size="1" id="tipoventa" onchange="tipoventa()">
              <option value="5">------</option>
            <option value="1">Venta Playa</option>
            <option value="2">Venta Crudo Planta</option>
            <option value="3">Venta  Procesado Planta</option>
            <option value="4">Venta por compra externa</option>
              </select>
        </div>  
  <table width="900" border="1">
    <tr>
        <td height="45">
            <div align="center">
              <div align="center"> CLIENTE<br />
                  <input type="text" name="textfield" id="clienteventa" onkeydown="ventanacliente(event)" />
          <label>
          <div align="center"></div>
            </div> 
            
        </td>
      <td>
          <div align="center">COMPRA<br />
        <input type="text" name="textfield" id="productocomprado"/>
          <label>
          <div align="center"></div>
      </div>
       </td>
            <td>
                <div align="center">
        FORMA PAGO<br />
          <select name="select" size="1" id="formapago">
              
            <option value="1">Contado</option>
            <option value="2">Credito</option>
          </select>
          <label>
        <div align="center"></div>
      </div>
            </td>
            <td>
                <div align="center">
        <label></label>
        MATERIAL<br />
        <input type="text" name="textfield2" id="materialventa" onkeydown="ventanaproducto(2,event)" />
          <label>
        <div align="center"></div>
          </div>
            </td>
    </tr>
    <tr>
        
      <td>
        <div align="center">ORIGEN <br / >
          <label>
          <input type="text" name="textfield8" id="bodegaventa"/>
          </label>
      </div>
      </td>
      <td>
          <div align="center">DESTINO<br />
          <label>
          <input type="text" name="textfield9" id="destino"/>
          </label>
</div>
          
      </td>
      <td>
           <div align="center">VALE<br />
          <label>
          <input type="text" name="textfield9" id="vale"/>
          </label>
</div>   
      </td>
      
          <td height="40">
              <div align="center">VIAJES<br />
          <label>
              <input type="text" name="textfield10" id="viajes" onkeypress="return justNumbers(event);" onkeyup="espacionumericovacio($(this).attr('id'));" />
          </label>
</div>
      </td>
    </tr>
    <tr>
      <td height="40"> 
      <div align="center">METROS3<br />
          <label>
              <input type="text" name="textfield11" id="metros3" onkeyup="metrosventa(),espacionumericovacio($(this).attr('id'));"/>
          </label>
</div>
      </td>
      <td>
           <div align="center">TOTAL M3 <br />
          <label>
              <input type="text" name="textfield12" id="totalmetros" />
          </label>
          </div> 
      </td>
      <td>
        <div align="center">VALOR UNITARIO M3 <br />
          <label>
              <input type="text" name="textfield13" id="valorunitario" onkeypress="return justNumbers(event);" onkeyup="valorunitarioventa(),gananciasventa(),costosventa(),espacionumericovacio($(this).attr('id'));"/>
          </label>
<br />
        <label></label>
      </div> 
      </td>
      <td>
         <div align="center">VALOR TOTAL M3 <br />
          <label>
              <input type="text" name="textfield13" id="valormaterial" onkeypress="return justNumbers(event);" onkeyup="valortotalventaproducto(),gananciasventa(),costosventa(),espacionumericovacio($(this).attr('id'));;" />
          </label>
<br />
        <label></label>
      </div> 
      </td>
    </tr>
    <tr>
        <td>
           <div align="center">
        <p>TRANSPORTE
          <label>
              <input type="checkbox" name="checkbox" value="checkbox" id="validatransporte" onclick="validatransporte()" />
          </label>
          <br />
        </p>
      </div>
            
        </td>
        <td>
           <div align="center">PROVEEDOR<br />
          <label>
          <input type="text" name="textfield3" id="proveedortransporte" />
          </label>
</div> 
            
        </td>
        <td>
           <div align="center">VALOR<br />
TRANSPORTE M3<br />
<label>
    <input type="text" name="textfield4" id="valorunitariotransporte" onkeypress="return justNumbers(event);" onkeyup="valorunitariotransporte(),gananciasventa(),costosventa(),espacionumericovacio($(this).attr('id'));;"/>
</label>
<br />
      </div> 
            
        </td>
        <td>
            <div align="center">
        <label></label>
      VALOR TRANSPORTE <br />
      <label>
          <input type="text" name="textfield52" id="valortransporte" onkeypress="return justNumbers(event);" onkeyup="valortotaltransporte(),gananciasventa(),costosventa(),espacionumericovacio($(this).attr('id'));;"  />
      </label>
</div>
            
            
            
            
            
        </td>
    </tr>
    <tr>
      <td><div align="center">PLACA VEHICULO <br />
          <label>
          <select name="departamento" id="vehiculo"> 
              <option value="0">-----</option>
         <?php
         include_once '../../class/conexion.php';
$sql = "SELECT * from vehiculo " ;
$dato=  mysqli_query($miconexion,$sql);
while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idvehiculo'].'">'.$tabla['placa'].'</option>';
       };
         
         ?>
   </select>   
          </label>
</div></td>
      <td><div align="center">CONDUCTOR<br />
          <label>
          <select name="departamento" id="nombreconductor"> 
              <option value="0">-----</option>
         <?php
         include_once '../../class/conexion.php';
$sql = "SELECT * from conductor " ;
$dato=  mysqli_query($miconexion,$sql);
while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idconductor'].'">'.$tabla['nombreconductor'].'</option>';
       };
         
         ?>
   </select>   
          </label>
<br />
</div></td>
<td>
    <div align="center">
        <label></label>
     COSTO TRANSPORTE M3 <br />
      <label>
          <input type="text" name="textfield52" id="costotransportem3" onkeypress="return justNumbers(event);" onkeyup="valorunitariocostetransporte(),costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;" />
      </label>
          </div>
    
</td>
          <td>
              <div align="center">
        <label></label>
     COSTO TRANSPORTE <br />
      <label>
          <input type="text" name="textfield52" id="costotransporte" onkeypress="return justNumbers(event);" onkeyup="valortotalcostetransporte(),costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;"/>
      </label>
          </div>
              
              
              
              
          </td>
    </tr>
	<tr>
      <td><div align="center">ASOPAL M3
          <label></label>
          <br />
          <label>
              <input type="text" name="textfield522" id="asopal" onkeypress="return justNumbers(event);" onkeyup="costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;"/>
          </label>
</div></td>
      <td><div align="center">SERVIDUMBRE M3<br />
          <label>
          <input type="text" name="textfield15" id="servidumbre"  onkeyup="costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;"/>
          </label>
</div></td>
      <td><div align="center">CARGE PLAYA M3 <br />
          <label>
          <input type="text" name="textfield153" id="cargeplaya" onkeypress="return justNumbers(event);" onkeyup="costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;" />
          </label>
</div></td>
      <td><div align="center">
        <label></label>
      TRANSPORTE A PLANTA M3 <br />
      <label>
      <input type="text" name="textfield154" id="transporteplanta" onkeypress="return justNumbers(event);" onkeyup="costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;"/>
      </label>
</div></td>
    </tr>
	<tr>
      <td><div align="center">CARGE AL CLIENTE M3 <br />
          <label>
          <input type="text" name="textfield155" id="cargecliente"  onkeypress="return justNumbers(event);" onkeyup="costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;" />
          </label>
</div></td>
      <td><div align="center">CARRETAJE Y LAVADO M3 <br />
          <label>
          <input type="text" name="textfield156" id="carretajelavado"  onkeypress="return justNumbers(event);" onkeyup="costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;"/>
          </label>
</div></td>
      <td><div align="center">COMISION ESPECIAL <br />
PRIVADA    <br />
    <label>
    <input type="text" name="textfield142" id="comisionprivada"  onkeypress="return justNumbers(event);" onkeyup="costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;"/>
    </label>
</div></td>
      <td><div align="center">
        <label></label>
      COSTOS DE ASESORIAS        <br />
        <label>
        <input type="text" name="textfield143" id="asesorias"  onkeypress="return justNumbers(event);" onkeyup="costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;" />
        </label>
</div></td>
    </tr>
    <tr>
      <td><div align="center">COMISON POR VENTA <br />
          <label>
          <input type="text" name="textfield14" id="comisionventa"  onkeypress="return justNumbers(event);" onkeyup="costosventa(),gananciasventa(),espacionumericovacio($(this).attr('id'));;" />
          </label>
</div></td>
      <td><div align="center">
        <label></label>
      VALOR TOTAL <br />
      <label>
      <input type="text" name="textfield1522" id="valortotal" />
      </label>
</div></td>
      <td><div align="center">COSTOS TOTALES <br />
          <label>
          <input type="text" name="textfield152" id="costosventa" />
          </label>
</div></td>
<td>
    <div align="center">UTILIDAD BRUTA <br />
          <label>
          <input type="text" name="textfield1523" id="utilidadbruta" />
          </label>
</div>
</td>
    </tr>
  </table>
  <p>
  <center> <input type="submit" name="Submit2" value="GUARDAR" id="guardarventaprincipal" onclick="guardarventa()"/>
</form>
