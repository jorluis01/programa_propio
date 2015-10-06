$(document).ready(function(){
    var idproducto;
    $('#ventananuevoproducto').live('click',function(){
        
        $.get('modulos/articulo/nuevoarticulo.php',function(html){
           
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Nuevo Articulo",
                         width: 550,
                         minWidth: 400,
                         maxWidth:600 ,
                         show: "fold",
                         hide: "scale",
                         resizable: "false"
                          
                         
                        
                         
		});
                return false;

       });
      //cuando oprime el boton nuevo abre la ventana para poder hacer la nueva tipo bodega
  });
    $('#guardarproducto').live('click',function(){
    if($('#nombreproducto').val()==""||$('#descripcionproducto').val()==""||$('#valorventa').val()==""){
            alert("campo vacio");
     }
      else{
          var data="type=9&nombre="+$('#nombreproducto').val()+"&descripcion="+$('#descripcionproducto').val()+"&valor="+$('#valorventa').val();
          $.get('ajax.php',data,function(html){
                alert("Datos Guardados");
                 $.get('modulos/articulo/index.php',function(html){
                    $('#nombreproducto').val('');
                    $('#descripcionproducto').val('');
                    $('#valorventa').val('');
                    $('.modulos').html(html);
                    });
          
           });
          
          
      }
    });
    
    $('.editarproducto').live('click',function(){
    idproducto = $(this).attr("id");
       
         var nombre=$('.nombreproducto'+idproducto).text();
         var descripcion=$('.descripcionproducto'+idproducto).text();
         var valor=$('.valorventa'+idproducto).text();
          $.get('modulos/articulo/editararticulo.php',function(html){
           
            $('#ventanaemergente').html(html);
             $('#nombreproducto').val(nombre);
             $('#descripcionproducto').val(descripcion);
             $('#valorventa').val(valor);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Editar Articulo",
                         width: 550,
                         minWidth: 400,
                         maxWidth:600 ,
                         show: "fold",
                         hide: "scale",
                         resizable: "false"
                          
                         
                        
                         
		});
                return false;
        
       });
      });
    
     $('#editarproducto').live('click',function(){
    if($('#nombreproducto').val()==""||$('#descripcionproducto').val()==""||$('#valorventa').val()==""){
            alert("campo vacio");
     }
      else{
        var data="type=10&id="+idproducto+"&nombre="+$('#nombreproducto').val()+"&descripcion="+$('#descripcionproducto').val()+"&valor="+$('#valorventa').val();
                      $.get('ajax.php',data,function(html){
                          
                  alert("Modificacion exitosa");
                 
             $.get('modulos/articulo/index.php',function(html){
                   $('#ventanaemergente').dialog('close');
                  $('.modulos').html(html);
                 });
             });
             
      }
    
    
    });
    
    
});


