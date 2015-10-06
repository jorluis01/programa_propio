$(document).ready(function(){  
    $('#comprobantediario').live('click',function(){
          var f = new Date();
       var data='fecha='+f.getFullYear() + '-' + (f.getMonth() +1) + '-' + f.getDate();
        
        $.get('modulos/comprovante_diario/buscador.php',data,function (html){
             $('.modulos').html(html);
              var f = new Date();
             $('#fechacomprobantes').val(f.getFullYear() + '-' + (f.getMonth() +1) + '-' + f.getDate());
        });
        
        
    });
    
    $('#Planilla').live('click',function(){
          var data='fecha1='+fecha()+'&fecha2='+fecha();
        
        $.get('modulos/planilla/informe/buscador.php',data,function (html){
             $('.modulos').html(html);
               });
        
        
        
    });
    
    $('#salidamaterialplaya').live('click',function(){
         
       var data='fecha1='+fecha()+'&fecha2='+fecha();
        
        $.get('modulos/informes/asopalservidumbre.php',data,function (html){
             $('.modulos').html(html);
               });
        
        
    });
    
    
    
    
    $('#trasladoentrebodegas').live('click',function(){
         
       var data='fecha1='+fecha()+'&fecha2='+fecha();
        
        $.get('modulos/transportematerial/informe/informe.php',data,function (html){
             $('.modulos').html(html);
               });
        
        
    });
    
    $('#comprobantecontabilidad').live('click',function(){
         
       var data='fecha1='+fecha()+'&fecha2='+fecha();
        
        $.get('modulos/comprovantedecontabilidad/buscador.php',data,function (html){
             $('.modulos').html(html);
               });
        
        
    });
    
    
    
    
     $('#Informecompra').live('click',function(){
         
       var data='fecha1='+fecha()+'&fecha2='+fecha();
        
        $.get('modulos/compra/informe/buscador.php',data,function (html){
             $('.modulos').html(html);
               });
        
        
    });
    
    
    
    
    
    $('#inventarioinforme').live('click',function(){
         var f = new Date();
          var data='fecha='+f.getFullYear() + '-' + (f.getMonth() +1) ;
        $.get('modulos/inventario/informe/informeplanta.php',data,function (html){
             $('.modulos').html(html);
              });
    
        
        
    });
    $('#kardexinforme').live('click',function(){
         
           var data='fecha1='+fecha()+'&fecha2='+fecha();
        $.get('modulos/kardex/kardex.php',data,function (html){
             $('.modulos').html(html);
              });
    
        
        
    });
    $('#balanceinforme').live('click',function(){
         var f = new Date();
         var mes;
         if(f.getMonth()+1 < 10){
             mes="0";
         }
       var data='fecha='+f.getFullYear() + '-'+mes+ (f.getMonth() +1) ;
        $.get('modulos/balance/balance.php',data,function (html){
             $('.modulos').html(html);
              });
       });
     $('#cajainforme').live('click',function(){
          
       var data='fecha1='+fecha()+'&fecha2='+fecha();
       
       
        $.get('modulos/caja/movimientocajadiario/buscardor.php',data,function (html){
             $('.modulos').html(html);
              
             $('#fechacajainicial').val(fecha());
              $('#fechacajafinal').val(fecha());
              });
       });   
       
       
     $('#buscarbalance').live('click',function(){
        var fechabalance= $('#fechacomprobantes').val();
        var data='fecha='+fechabalance;
         $.get('modulos/comprovante_diario/comprovante.php',data,function (html){
            
             $('.COMPROBANTEDIARIO').html(html);
        });
         
     });
      $('#buscarinformecaja').live('click',function(){
        var fechabalance= $('#fechacaja').val();
        var data='fecha='+fechabalance;
         $.get('modulos/caja/informe/informe.php',data,function (html){
            
             $('#informecaja').html(html);
        });
         
     });
      $('#buscarinformecaja').live('click',function(){
        var fechabalance= $('#fechacaja').val();
        var data='fecha='+fechabalance;
         $.get('modulos/caja/informe/informe.php',data,function (html){
          
             $('#informecaja').html(html);
        });
         
     });
    
 $('#ventainforme').live('click',function(){
        
        var data='fecha1='+fecha()+'&fecha2='+fecha();
         $.get('modulos/venta/informe/buscador.php',data,function (html){
          
             $('.modulos').html(html);
        });
         
     });







});