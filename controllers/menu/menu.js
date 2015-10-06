$(document).ready(function(){
    $('#tipobodega').live('click',function(){
       
        $.get('modulos/bodega/tipo_bodega/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
      $('#bodega').live('click',function(){
       
        $.get('modulos/bodega/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#cliente').live('click',function(){
       
        $.get('modulos/cliente/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#proveedor').live('click',function(){
       
        $.get('modulos/proveedor/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#material').live('click',function(){
       
        $.get('modulos/articulo/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#inventario').live('click',function(){
       
        $.get('modulos/inventario/index.php',function(html){
             
            $('.modulos').html(html);
           });
        
        
     });
     $('#compra').live('click',function(){
       
        $.get('modulos/compra/comprar.php',function(html){
             
            $('.modulos').html(html);
           
            $('#fechacompra').val(fecha());
            $('#numerodocumento').val(numerodocumeto());
                   

           });
        
        
     });
     $('#venta').live('click',function(){
       
        $.get('modulos/venta/temporal.php',function(html){
             
            $('.modulos').html(html);
            
            $('#fechaventa').val(fecha());
             inhabilitartodaslaventa();  
           

           });
        
        
     });
     $('#convertirmaterial').live('click',function(){
       
        $.get('modulos/convertir/convertir.php',function(html){
             
            $('.modulos').html(html);
             document.getElementById('bodegaproductoaconvertir').disabled = true;
             document.getElementById('bodegaproductoaconvertir1').disabled = true;
           });
        
        
     });
     $('#ajustematerial').live('click',function(){
         
       var data='fecha='+fecha();
        $.get('modulos/ajusteinventario/ajusteinventario.php',function(html){
             
            $('.modulos').html(html);
            $('#fechaajuste').val(fecha());
             document.getElementById('bodegaproductoajustar').disabled = true;
             
           });
           $.get('modulos/inventario/informe/informe.php',data,function(html){
             
            $('#tablaajuste').html(html);
             document.getElementById('bodegaproductoajustar').disabled = true;
             
           });
        
        
     });
     $('#transpotematerial').live('click',function(){
        
         $.get('modulos/transportematerial/transporte.php',function(html){
             
            $('.modulos').html(html);
             document.getElementById('cantidadproductotransporte1').disabled = true;
       $('#fechatransportematerial').val(fecha());
             document.getElementById('bodegaproductotransporte1').disabled = true;
             document.getElementById('bodegaproductotransporte2').disabled = true;
           }); 
     });
     $('#caja').live('click',function(){
        
         $.get('modulos/caja/movimientosdecaja/caja.php',function(html){
             
            $('.modulos').html(html);
             $('#fechacajamovimiento').val(fecha());
       
     });
      });
     
});

