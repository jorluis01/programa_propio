$(document).ready(function(){
    var idbodega;
    $("#departamento").live('change',function(event){
        
            var id = $("#departamento").find(':selected').val();
            $("#municipio").load('./class/departamentomunicipio/generamunicipioid.php?id='+id);
        });
        
        
        
    $('#ventananuevabodega').live('click',function(){
        
        $.get('modulos/bodega/nuevabodega.php',function(html){
           
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Nueva Bodega",
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
    
     $('#guardarbodega').live('click',function(){
    if($('#nombrebodega').val()==""||$("#departamento").find(':selected').val()==0||$("#municipio").find(':selected').val()==0||$('#direccionbodega').val()==""||$("#tipobodebodega").find(':selected').val()==0){
            alert("campo vacio");
     }
      else{
          var data="type=3&nombrebodega="+$('#nombrebodega').val()+"&idmunicipio="+$('#municipio').find(':selected').val()+"&direccion="+$('#direccionbodega').val()+"&idtipobodega="+$('#tipobodebodega').find(':selected').val();
          $.get('ajax.php',data,function(){
              
                alert("Datos Guardados");
                
                 $.get('modulos/bodega/nuevabodega.php',function(html){
                  $('#ventanaemergente').html(html);     
                 });
                  $.get('modulos/bodega/index.php',function(html){
             
                  $('.modulos').html(html);
                 });
                 
           });
          
      }
  });
  $('.editarbodega').live('click',function(){
       idbodega = $(this).attr("id");
       var nombre=$('.nombrebodega'+idbodega).text();
       var direccion=$('.direccionbodega'+idbodega).text();
        $.get('modulos/bodega/editarbodega.php',function(html){
           
            $('#ventanaemergente').html(html);
            $('#nombrebodega').val(nombre);
            $('#direccionbodega').val(direccion);
            
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Editar Bodega",
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
     $('#editarbodega').live('click',function(){
    if($('#nombrebodega').val()==""||$("#departamento").find(':selected').val()==0||$("#municipio").find(':selected').val()==0||$('#direccionbodega').val()==""||$("#tipobodebodega").find(':selected').val()==0){
            alert("campo vacio");
     }
      else{
        var data="type=4&id="+idbodega+"&nombrebodega="+$('#nombrebodega').val()+"&idmunicipio="+$('#municipio').find(':selected').val()+"&direccion="+$('#direccionbodega').val()+"&idtipobodega="+$('#tipobodebodega').find(':selected').val();
          $.get('ajax.php',data,function(html){
                  alert("Modificacion exitosa");
             $.get('modulos/bodega/index.php',function(html){
                   $('#ventanaemergente').dialog('close');
                  $('.modulos').html(html);
                 });
             });
             
      }
    
    
    });
    
});

