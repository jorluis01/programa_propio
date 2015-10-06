<head>
    
</head>

<div id="fechacajainforme">
   <center>FECHA INICIAL: <input name="fechacaja" type="date" id="fechaventainicial"  > 
       FECHA FINAL: <input name="fechacaja" type="date" id="fechaventafinal"  >
       <p></p>
       CLIENTE: <input type="text" name="textfield" onclick="ventanaclientefiltrado()" id="clientefiltrado"/>
       TIPO DE VENTA: <select name="select" size="1" id="formapago">
              <option value="0">-------</option>
            <option value="1">Contado</option>
            <option value="2">Credito</option>
          </select>
       
       
       <p><input name="buscarinformecaja" type="button" id="buscarinformeventa" value="Buscar" onclick="buscarventafiltrado()"  > 
</div>
<div id="informeventafiltrada">




