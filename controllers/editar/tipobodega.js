$(document).ready(function(){
    var idtipobodega;
    //script,controlador bodega, aca hago funciona a modo ajax este modulo
  $('#ventananuevotipobodega').live('click',function(){
        
        $.get('modulos/bodega/tipo_bodega/nuevotipobodega.php',function(html){
           
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Nuevo Tipo Bodega",
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
  $('#guardartipobodega').live('click',function(){
       //cuando se oprime el boton guardar de la ventana nuevo tipo bodega ejecuta el siguiente codigo
     if($('#nombretipobodega').val()==""){
            alert("campo vacio");
     }
      else{
           var data='type=1&tipo='+$('#nombretipobodega').val();
           $.get('ajax.php',data,function(){
                alert("Dato Guardado");
               $('#nombretipobodega').val('');
                    $.get('modulos/bodega/tipo_bodega/index.php',function(html){
             
                     $('.modulos').html(html);
                    });
           });

      }

    
        });
        
   $('.editartipobodega').live('click',function(){
       idtipobodega = $(this).attr("id");
       $.get('ajax.php',idtipobodega,function(){
              var nombre=$('.tipobodega'+idtipobodega).text();
               $.get('modulos/bodega/tipo_bodega/editartipobodega.php',function(html){
           
            $('#ventanaemergente').html(html);
             $('#nombreeditartipobodega').val(nombre);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Editar Tipo Bodega",
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
   });
   
   $('#editartipobodega').live('click',function(){
       var data='type=2&id='+idtipobodega+'&tipo='+$('#nombreeditartipobodega').val()+'&id='+idtipobodega+'';
        $.get('ajax.php',data,function(){
               $.get('modulos/bodega/tipo_bodega/index.php',function(html){
                       alert("Modificacion exitosa");
                     $('.modulos').html(html);
                     $('#ventanaemergente').dialog('close');

                    });
           });
   });
    
    
    
    
    
    
    
});