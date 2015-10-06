$(document).ready(function(){ 
var idproducto;
$('#productoajustar').live('keydown',function(e){
        
         if (e.keyCode == 113) { 
        var id='id=0';
        $.get('modulos/compra/producto/producto.php',id,function(html){
             
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Buscar Producto",
                         width: 550,
                         minWidth: 400,
                         maxWidth:600 ,
                         show: "fold",
                         hide: "scale",
                         resizable: "false"
                          
                         
                        
                         
		});
                
                return false;
                
       });
    }
        
        
        
    
    
        
        
        
    });
  
    $('.seleccionarcompraproducto').live('click',function(){
         
        var id = $(this).attr("id"); 
        var nombre=$('.productonombreinventario'+id).text();
        var bodega=$('.bodegainventario'+id).text();
       
       
        idproducto=id;
         document.getElementById('productoajustar').value=nombre;
        document.getElementById('bodegaproductoajustar').value=bodega;
        
        
         
        
        //averiguar mas sobre esto
        
        
    });
    
    $('#incrementarajustes').live('click',function(){
         
       var fecha=$('#fechaajuste').val();
         
        var cantidad= document.getElementById('cantidadproductoajustar').value;
        var concepto=document.getElementById('conceptoproductoajustar').value;
        var valorm3=document.getElementById('valorm3').value;
        
        var data='type=26&idproducto='+idproducto+'&cantidad='+cantidad+'&concepto='+concepto+'&valorm3='+valorm3+'&tipo=1&fecha='+fecha;
        $.get('ajax.php',data,function(html){
            var f = new Date();
             var data='fecha='+f.getFullYear() + '-' + (f.getMonth() +1) + '-' + f.getDate();
            $.get('modulos/ajusteinventario/ajusteinventario.php',function(html){
             
            $('.modulos').html(html);
             document.getElementById('bodegaproductoajustar').disabled = true;
             
             });
            $.get('modulos/inventario/informe/informe.php',data,function(html){
             
            $('#tablaajuste').html(html);
             document.getElementById('bodegaproductoajustar').disabled = true;
             
           });
            
            
            
            
            
        });
    
    
    });
    $('#disminuirajueste').live('click',function(){ 
         var fecha=$('#fechaajuste').val();
        var cantidad= document.getElementById('cantidadproductoajustar').value;
        var concepto=document.getElementById('conceptoproductoajustar').value;
         var valorm3=document.getElementById('valorm3').value;
        var data='type=26&idproducto='+idproducto+'&cantidad='+cantidad+'&concepto='+concepto+'&valorm3='+valorm3+'&tipo=2&fecha='+fecha;
        $.get('ajax.php',data,function(){
            var f = new Date();
       var data='fecha='+f.getFullYear() + '-' + (f.getMonth() +1) + '-' + f.getDate();
        $.get('modulos/ajusteinventario/ajusteinventario.php',function(html){
             
            $('.modulos').html(html);
             document.getElementById('bodegaproductoajustar').disabled = true;
             
           });
           $.get('modulos/inventario/informe/informe.php',data,function(html){
             
            $('#tablaajuste').html(html);
             document.getElementById('bodegaproductoajustar').disabled = true;
             
           });
            
            
            
        });
    
    
    });
       });