function movimientoasopalrango(){
    var fecha1=$('#fechaasopalinicial').val();
    var fecha2=$('#fechaasopalfinal').val();
     var data='fecha1='+fecha1+'&fecha2='+fecha2;
    $.get('modulos/informes/asopalservidumbre.php',data,function (html){
            $('.modulos').html(html);
               });
             
              
}
function movimientocajadiarioj(){
    var fecha1=$('#fechacajainicial').val();
    var fecha2=$('#fechacajafinal').val();
     var data='fecha1='+fecha1+'&fecha2='+fecha2;
     $.get('modulos/caja/movimientocajadiario/informe.php',data,function (html){
             $('#informecajadiario').html(html);
              
             
              });
}
function movimientoplanilla(){
    var fecha1=$('#fechaplanillainicial').val();
    var fecha2=$('#fechaplanillafinal').val();
     var data='fecha1='+fecha1+'&fecha2='+fecha2;
     window.open("modulos/planilla/informe/informerangos.php?"+data);
}


function informecaja(){
     var data='fecha='+$('#fechainformeplanta').val();
        $.get('modulos/inventario/informe/informeplanta.php',data,function (html){
             $('.modulos').html(html);
              });
}
function movimientomaterialinforme(){
     var fecha1=$('#fechamovimientoinicial').val();
    var fecha2=$('#fechamovientofinal').val();
     var data='fecha1='+fecha1+'&fecha2='+fecha2;
     $.get('modulos/transportematerial/informe/informe.php',data,function (html){
             $('.modulos').html(html);
               });
}
function movimientoinformecompra(){
    var fecha1=$('#fechacomprainicial').val();
    var fecha2=$('#fechaventafinal').val();
     var data='fecha1='+fecha1+'&fecha2='+fecha2;
        $.get('modulos/compra/informe/informe.php',data,function (html){
             $('#buscardorcompra').html(html);
               });
}
function movimientoinformecomprobante(){
    
    var fecha1=$('#fechacomprobanteinicial').val();
    var fecha2=$('#fechacomprobantefinal').val();
     var data='fecha1='+fecha1+'&fecha2='+fecha2;
        $.get('modulos/comprovantedecontabilidad/comprovante.php',data,function (html){
             $('.COMPROBANTE').html(html);
               });
}
function kardexinforme(){
     var fecha1 = $('#fechainformeplanta1').val();
     var fecha2 = $('#fechainformeplanta2').val();
             var data='fecha1='+fecha1+'&fecha2='+fecha2;
        $.get('modulos/kardex/kardex.php',data,function (html){
             $('.modulos').html(html);
             $('#fechainformeplanta').val(fecha);
              });
}
function menumodificartraslado(){
    $.get('modulos/modificar/traslado/oldpagination/pagination.php',function(html){
        $('.modulos').html(html);
    });
}


