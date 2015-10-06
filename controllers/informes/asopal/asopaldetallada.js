function menuasopal(){
    var data='fecha1='+fecha()+'&fecha2='+fecha();
    $.get('modulos/informes/asopal.php',data,function(html){
        $('.modulos').html(html);
    });    
}
function asopaldetallada(){
    var fecha1=$('#fechaasopalinicial').val();
    var fecha2=$('#fechaasopalfinal').val();
   var data='fecha1='+fecha1+'&fecha2='+fecha2;
   $.get('modulos/informes/asopal.php',data,function(html){
        $('.modulos').html(html);
    }); 
}


