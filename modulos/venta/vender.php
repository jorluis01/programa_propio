

   
  
<div class="venta">
    <div class="informeventa">
        <p class="txttipo2">cliente:<input type="text" id="nitproveedorventa"><input type="hidden" id="nitproveedor"><input type="text" id="nombreproveedorventa" readonly>
           <!-- <input type="text" id="fecha" readonly  value="">
           -->
           <input type="date" name="fechaventa" id="fechaventa" > 
        </p>
        <p class="txttipo2">Forma Pago:
        <select name="formapagoventa" id="formapagoventa">
            
            <option value="1">Contado</option>
            <option value="2">Credito</option>
        </select>
        
        
    </div>
    
    <center><table style="width: 900px; height: 56px;" border="1">
      <tbody>
          <tr  >
              <td style="width: 30.65px; "><center>ID</center></td>
            <td style="width: 150.65px; "><center>PRODUCTO</center></td>
      <td style="width: 200.067px;"><center>DESTINO</center></td>
          <td style="width: 307.533px;"  ><center>VIAJES</center></td>
          <td style="width: 200.067px;"><center>METROS3 </center></td>
           <td style="width: 200.067px;"><center>TOTAL M3</center></td>
           <td style="width: 200.067px;"><center>VALOR UNITARIO</center></td>
           <td style="width: 200.067px;"><center>VALORTOTAL </center></td>
           
                
               
               
        </tr>
        <tr style="height: 30px;">
            <td class="idproducto1"  ><center></center></td>
            <td   contentEditable="true" class="productoventa1"></td>
        <td style="width: 307.533px;" class="bodegaventa1"  ><center></center></td>
        <td style="width: 200.067px;" class="viajesventa1"contentEditable="true"><center></center></td>
             
        <td style="width: 200.067px;" class="metros3venta1" contentEditable="true"><center></center></td>
        <td style="width: 150.65px;" class="totalm3venta1" ><center></center></td>
        <td style="width: 307.533px;" class="valorunitarioventa1" contentEditable="true" ><center></center></td>
        <td style="width: 200.067px;" class="valortotalventa1" ><center></center></td>
             
                
        
        
        
        </table>
        
        <p style="text-align: right">    
        <button class="boton" id="guardarventa"><img src="images/guardar.png" style="width:40px; "></button>
        </p>
            </center>

        
        
        </div>
      </body>