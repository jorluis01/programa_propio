function viajescompra(columnas){
    producto="";
    var producto=$('.productocompra'+columnas).text();
    
    if (producto.length==0|| /^\s+$/.test(producto)){
        
        $('.productocompra'+columnas).focus();
        
    }
}
s
function totalmetroscompra(columnas){
    
      var viajes=$('.viajescompra'+columnas).text();
        var metros=$('.metros3compra'+columnas).text();
        if(viajes.length==0|| /^\s+$/.test(viajes)){
            $('.viajescompra'+columnas).focus();
           
        }
        if(metros.length==0|| /^\s+$/.test(metros)){
            $('.metros3compra'+columnas).focus();
            
        }
        
        if(metros.length==0|| /^\s+$/.test(metros) && viajes.length==0|| /^\s+$/.test(viajes)){
            $('.viajescompra'+columnas).focus();
        }
        var totalmetros=viajes*metros;
        $('.totalm3compra'+columnas).text(totalmetros);
}
function valorcompra(columnas){
    
     var totalmetros=$('.totalm3compra'+columnas).text();
     var valorunitario=$('.valorunitariocompra'+columnas).text();
     
        var totalcompra=totalmetros*valorunitario;
        $('.valortotalcompra'+columnas).text(totalcompra);
        
        if(totalmetros===""||totalmetros==="0"){
           $('.viajescompra'+columnas).focus();
        }else{
             
         }
}
function valorunitariocompra(columnas){
    
     var totalmetros=$('.totalm3compra'+columnas).text();
     var valorcompra=$('.valortotalcompra'+columnas).text();
        var totalcompra=valorcompra/totalmetros;
         $('.valorunitariocompra'+columnas).text(totalcompra);
}

