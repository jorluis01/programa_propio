$(document).ready(function(){
    var idcliente;
    $('#ventananuevocliente').live('click',function(){
        
        $.get('modulos/cliente/nuevocliente.php',function(html){
           
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Nuevo Cliente",
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
    $('#guardarcliente').live('click',function(){
    if($('#nombrecliente').val()==""||$('#telefonocliente').val()==""||$('#nitcliente').val()==""){
            alert("campo vacio");
     }
      else{
          var data="type=5&nombre="+$('#nombrecliente').val()+"&telefono="+$('#telefonocliente').val()+"&nit="+$('#nitcliente').val();
          $.get('ajax.php',data,function(html){
                alert("Datos Guardados");
                 $.get('modulos/cliente/index.php',function(html){
                    $('#nombrecliente').val('');
                    $('#telefonocliente').val('');
                    $('#nitcliente').val('');
                    $('.modulos').html(html);
                    });
          
           });
          
          
      }
    });
    
    $('.editarcliente').live('click',function(){
     idcliente = $(this).attr("id");
       
         var nombre=$('.nombrecliente'+idcliente).text();
         var telefono=$('.telefono'+idcliente).text();
         var nit=$('.nit'+idcliente).text();
          $.get('modulos/cliente/editarcliente.php',function(html){
           
            $('#ventanaemergente').html(html);
             $('#nombrecliente').val(nombre);
             $('#telefonocliente').val(telefono);
             $('#nitcliente').val(nit);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Editar Cliente",
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
    
     $('#editarcliente').live('click',function(){
   if($('#nombrecliente').val()==""||$('#telefonocliente').val()==""||$('#nitcliente').val()==""){
            alert("campo vacio");
     }
      else{
        var data="type=6&id="+idcliente+"&nombre="+$('#nombrecliente').val()+"&telefono="+$('#telefonocliente').val()+"&nit="+$('#nitcliente').val();
        
           $.get('ajax.php',data,function(html){
                  alert("Modificacion exitosa");
                 
             $.get('modulos/cliente/index.php',function(html){
                   $('#ventanaemergente').dialog('close');
                  $('.modulos').html(html);
                 });
             });
             
      }
    
    
    });
    
    
});


