<div id="fechacajainforme">
   <center>FECHA INICIAL: <input name="fecha1" type="date" id="fechaservidumbreinicial"  > 
       FECHA FINAL: <input name="fechacaja2" type="date" id="fechaservidumbrefinal"  > 
               <p>
                  <select id="servidumbres"> 
 <?php
 include_once '../../class/conexion.php';
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
        
        $sql = "SELECT * from asignarcarretaje group by nombre " ;
        $dato=  mysqli_query($miconexion,$sql);
        while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idasignar'].'">'.$tabla['nombre'].'</option>';
       };
         
         ?>
                       
                       
                       
           </select></a> 
               <p><input name="buscarinformecaja" type="button"  value="Buscar" onclick="datosinformeservidumbre()"></a> 
      

           </div>
<center>  <form action="ficheroExcel.php?fecha1=0&fecha2=0&nombre=SERVIDUMBRE DETALLADA " method="post" target="_blank" id="FormularioExportacion">
<p>Exportar a Excel  <img src="export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form></center>

<script language="javascript">
$(document).ready(function() {
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();

});
});
</script>
<div id="Exportar_a_Excel">
    
    
    
    
    
</div>
