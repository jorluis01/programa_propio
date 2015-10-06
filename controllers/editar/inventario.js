$(document).ready(function(){
    var idproducto;
    $('#ventananuevoinventario').live('click',function(){
        
        $.get('modulos/inventario/nuevoinventario.php',function(html){
           
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Nuevo Inventario",
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
    $('#guardarinventario').live('click',function(){
    
          var data="type=11&producto="+$('#bodegainventrioproducto').find(':selected').val()+"&bodega="+$('#bodegainventriobodega').find(':selected').val();
   
        $.get('ajax.php',data,function(html){
             
                alert("Datos Guardados");
                 $.get('modulos/inventario/index.php',function(html){
                    
                    $('.modulos').html(html);
                    });
          
           });
          
          
      
    });
    
    $('.editarinventario').live('click',function(){
    idproducto = $(this).attr("id");
       
         
          $.get('modulos/inventario/editarinventario.php',function(html){
           
            $('#ventanaemergente').html(html);
            
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Editar Inventario",
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
    
     $('#editarinventario').live('click',function(){
    
        var data="type=12&id="+idproducto+"&producto="+$('#bodegainventrioproducto').find(':selected').val()+"&bodega="+$('#bodegainventriobodega').find(':selected').val();                      $.get('ajax.php',data,function(html){
       
            $.get('ajax.php',data,function(html){
                                   
                  alert("Modificacion exitosa");
                 
             $.get('modulos/inventario/index.php',function(html){
                   $('#ventanaemergente').dialog('close');
                  $('.modulos').html(html);
                 });
             });
             });
             
      
    
    
    });
    
    
});


