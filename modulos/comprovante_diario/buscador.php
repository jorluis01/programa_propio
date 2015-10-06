<div id="fechacomprobante">
   <center>FECHA: <input name="fechacomprobante" type="date" id="fechacomprobantes"  > 
       <p><input name="buscarbalance" type="button" id="buscarbalance" value="Buscar"  > 
</div>
 <center>  <form action="ficheroExcel.php?fecha1=&fecha2=&nombre=Comprobante Diario " method="post" target="_blank" id="FormularioExportacion">
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
<?php

include_once './comprovante.php';

