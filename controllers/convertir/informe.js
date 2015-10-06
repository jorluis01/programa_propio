function menuinformetransformacion(){
    $.get('modulos/convertir/informe/buscador.php' ,function(html){
       $('.modulos').html(html);
   });
}
function buscarinformetransformacion(){
     var fecha1=$('#fechainformetransformacioninicial').val();
    var fecha2=$('#fechainformetransformacionfinal').val();
    
    var data='fecha1='+fecha1+'&fecha2='+fecha2;
    $.get('modulos/convertir/informe/informe.php',data,function(html){
       $('#informe').html(html);
   });
}


