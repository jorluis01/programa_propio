function datosinformeservidumbre(){
    var fecha1=$('#fechaservidumbreinicial').val();
    var fecha2=$('#fechaservidumbrefinal').val();
    var seleccionado=$("#servidumbres").find(':selected').val();
    var data='fecha1='+fecha1+'&fecha2='+fecha2+'&idservidumbre='+seleccionado;
    $.get('modulos/servidumbre/detallada.php',data,function(html){
       $('#Exportar_a_Excel').html(html);
   });
    
}
function clickmenuserdetallada(){
   $.get('modulos/servidumbre/buscador.php' ,function(html){
       $('.modulos').html(html);
   });
    
    
    
}



