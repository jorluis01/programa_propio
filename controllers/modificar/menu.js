function menumodificarventa(){
    $.get('modulos/modificar/venta/oldpagination/pagination.php',function(html){
       $('.modulos').html(html) 
    });
}
function eliminarventa(id){
     if (confirm('SEGURO QUE DESEA ELIMINAR\n\
se elimina bajo su responsabilidad' )) {
         var data="idventa="+id;
    $.get('modulos/modificar/venta/eliminar.php',data,function() {
        
    });
    menumodificarventa();
}
   
}


