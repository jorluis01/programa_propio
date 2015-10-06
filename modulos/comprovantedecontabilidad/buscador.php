<div id="fechacomprobante">
   <center>FECHAINICIAL: <input name="fechacaja" type="date" id="fechacomprobanteinicial"  > 
       FECHAFINAL: <input name="fechacaja" type="date" id="fechacomprobantefinal"  > 
       <p><input name="buscarinformecaja" type="button" id="buscarinformecomprobante" value="Buscar" onclick="movimientoinformecomprobante()"  > 
       </div>

<center>  <form action="ficheroExcel.php?fecha1=&fecha2=&nombre=Comprobante Contabilidad " method="post" target="_blank" id="FormularioExportacion">
<p>Exportar a Excel  <img src="export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>



<script language="javascript">
$(document).ready(function() {
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();

});
});
</script>
<div class="COMPROBANTEDIARIO" id="Exportar_a_Excel">



<div class="COMPROBANTE">


<?php

include_once './comprovante.php';

