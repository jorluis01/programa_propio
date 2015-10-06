$(document).ready(function(){ 
var numeroentablaoprime;
var columnas=1;
var idproducto;

 
 
  $('#productocompra').live('keyup',function(){
       var id=0;
        
    var nombre=$('#productocompra').val();
    
    if (nombre==""){
        id=0;
    }
    else{
        id=1;
    }
    var data='id='+id+'&nombre='+nombre;
        
    $.get('modulos/compra/producto/tablaproducto.php',data,function(html){
            
    $('#tablaproducto').html(html);
    
     });
     });
 $('.seleccionarcompraproducto').live('click',function(){
         
        idproducto = $(this).attr("id"); 
        var nombre=$('.productonombreinventario'+idproducto).text();
        var bodega=$('.bodegainventario'+idproducto).text();
        
        
        $('.productocompra'+columnas).text(nombre);
        $('.bodegacompra'+columnas).text(bodega);
        $('.idproducto1').text(idproducto);
               //averiguar mas sobre esto
         $('#ventanaemergente').dialog('close');
         $( ".viajescompra1").focus();  
        
    });


});


