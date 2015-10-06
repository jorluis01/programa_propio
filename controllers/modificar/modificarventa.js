var idmodificarventa;
function seleccionaridmodificarventa(id){
    
    idmodificarventa=id;
    cargarmodificarventa(idmodificarventa);
}
function cargarmodificarventa(id){
    var data="idventa="+id;
    $.get('modulos/modificar/venta/temporal.php',data,function(html){
       $('.modulos').html(html); 
    });
}


