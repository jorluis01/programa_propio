

   
  
<div class="compra">
    <P><div class="informecompra"></P>
    
    <input type="date" name="fechacompra" id="fechacompra"  > 
    <P>Numero Documento:<input type="text" id="numerodocumento" onkeypress="return justNumbers(event);" ></P>
        <p class="txttipo2">Proveedor:<input type="text" id="nitproveedorcompra"><input type="hidden" id="nitproveedor"><input type="text" id="nombreproveedorcompra" readonly>
           <!-- <input type="text" id="fecha" readonly  value="">
           -->
           
        </p>
       
        <p class="txttipo2">Forma Pago:
        <select name="formapagocompra" id="formapagocompra">
            
            <option value="1">Contado</option>
            <option value="2">Credito</option>
        </select>
        <p class="txttipo2">
            
        </p>
        
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
        <td   contentEditable="true" class="productocompra1" onkeydown="ventanaproducto(1,event)" ></td>
        <td style="width: 307.533px;" class="bodegacompra1"  ><center></center></td>
        <td style="width: 200.067px;" class="viajescompra1"contentEditable="true" onkeypress="return justNumbers(event);" onfocus="viajescompra(1)"> <center></center></td>
             
        <td style="width: 200.067px;" class="metros3compra1" contentEditable="true" ><center></center></td>
        <td style="width: 150.65px;" class="totalm3compra1" ><center></center></td>
        <td style="width: 307.533px;" class="valorunitariocompra1"  onkeypress="return justNumbers(event);" onfocus="totalmetroscompra(1)" onkeyup="valorcompra(1)"><center></center></td>
        <td style="width: 200.067px;" class="valortotalcompra1" contentEditable="true" onkeypress="return justNumbers(event);"  onkeyup="valorunitariocompra(1)" onfocus="totalmetroscompra(1)"><center></center></td>
             
                
        
        
        
        </table>
        
        <p style="text-align: right">    
        <button class="boton" id="guardarcompra"><img src="images/guardar.png" style="width:40px; "></button>
        </p>
            </center>

        
        
        </div>
      </body>