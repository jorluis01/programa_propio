$(document).ready(function(){
    var idproveedor;
    $('#ventananuevoproveedor').live('click',function(){
        
        $.get('modulos/proveedor/nuevoproveedor.php',function(html){
           
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Nuevo Proveedor",
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
    $('#guardarproveedor').live('click',function(){
    if($('#nombreproveedor').val()==""||$('#telefonoproveedor').val()==""||$('#nitproveedor').val()==""){
            
     }
      else{
          var data="type=7&nombre="+$('#nombreproveedor').val()+"&telefono="+$('#telefonoproveedor').val()+"&nit="+$('#nitproveedor').val()+"&tipo="+$('#tipoproveedor').find(':selected').val();
            
            $.get('ajax.php',data,function(html){
              
               alert("Datos Guardados");
                 $.get('modulos/proveedor/index.php',function(html){
                    $('#nombreproveedor').val('');
                    $('#telefonoproveedor').val('');
                    $('#nitproveedor').val('');
                    $('.modulos').html(html);
                    });
          
           });
          
          
      }
    });
    
    $('.editarproveedor').live('click',function(){
     idproveedor = $(this).attr("id");
       
         var nombre=$('.nombreproveedor'+idproveedor).text();
         var telefono=$('.telefono'+idproveedor).text();
         var nit=$('.nit'+idproveedor).text();
          $.get('modulos/proveedor/editarproveedor.php',function(html){
           
            $('#ventanaemergente').html(html);
             $('#nombreproveedor').val(nombre);
             $('#telefonoproveedor').val(telefono);
             $('#nitproveedor').val(nit);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Editar Proveedor",
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
    
     $('#editarproveedor').live('click',function(){
   if($('#nombreproveedor').val()==""||$('#telefonoproveedor').val()==""||$('#nitproveedor').val()==""){
            alert("campo vacio");
     }
      else{
        var data="type=8&id="+idproveedor+"&nombre="+$('#nombreproveedor').val()+"&telefono="+$('#telefonoproveedor').val()+"&nit="+$('#nitproveedor').val()+"&tipo="+$('#tipoproveedor').find(':selected').val();
        
           $.get('ajax.php',data,function(html){
                  alert("Modificacion exitosa");
                 
             $.get('modulos/proveedor/index.php',function(html){
                   $('#ventanaemergente').dialog('close');
                  $('.modulos').html(html);
                 });
             });
             
      }
    
    
    });
    
    
});





