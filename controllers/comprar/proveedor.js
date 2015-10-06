$(document).ready(function(){
   
    $('#nombreproveedorcompraayuda').live('keyup',function(){
       var id=0;
    var nombre=$('#nombreproveedorcompraayuda').val();
    if (nombre==""){
        id=0;
    }
    else{
        id=1;
    }
    var data='id='+id+'&nombre='+nombre;
        
    $.get('modulos/compra/proveedor/tablacompra.php',data,function(html){
            
    $('#tablacompra').html(html);
    
     });
    });
    
    
    
    
    
    
   
    
    
    
    
    
});


