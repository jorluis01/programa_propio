function eliminartraslado(id){
    if (confirm('SEGURO QUE DESEA ELIMINAR' )) {
        

    var data='idtraslado='+id;
    $.get('modulos/modificar/traslado/eliminar.php',data,function(html){
        alert(html);
        menumodificartraslado();
    });}
}


