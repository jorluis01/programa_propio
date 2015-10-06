var idcompra;
function guardarcompra(){
    if (confirm('SEGURO QUE DESEA GUARDAR\n\
se guarda bajo su responsabilidad' )) {
          idcompra;
         var identradaproducto;
       var nitproveedor= $('#nitproveedor').val();
       var fechafactura=$('#fechacompra').val();
       var valortotal=$('.valortotalcompra1').text();
       var producto=$('.idproducto1').text();
      var cantidad=$('.totalm3compra1').text();
      var viajes=$('.viajescompra1').text();
      var cantidaviaje=$('.metros3compra1').text();
      var valorunitario=$('.valorunitariocompra1').text();
      var documento=$('#numerodocumento').val();
        //alert(nitproveedor+' '+fechafactura+' '+valortotal+' '+producto+' '+cantidad+' '
          //      +viajes+' '+cantidaviaje+' '+valorunitario);
         var datos='type=13&fecha='+fechafactura+'&id='+nitproveedor+'&valor='+valortotal+'&documento='+documento;
         $.get('ajax.php',datos,function(html){
            
            idcompra=''+html;
                
            
       });
       var datos='type=14&idinventario='+producto+'&cantidad='+cantidad+'&fecha='+fechafactura;
        
        $.get('ajax.php',datos,function(html){
            identradaproducto=html;
           
             var formapago=$('#formapagocompra').val();
             var datos='type=15&idcompra='+idcompra+'&idproducto='+producto+'&viajes='+
               viajes+'&metros='+cantidaviaje+'&valorunitario='+valorunitario+'&cantidad='
               +cantidad+'&valortotal='+valortotal;
            
         $.get('ajax.php',datos,function(html){
             });
               if (formapago==="2"){
                 var datos='type=16&idcompra='+idcompra;
                  $.get('ajax.php',datos,function(html){
                       });
                       
                  
             } 
             if (formapago==="1"){
                 var concepto="compra numero="+idcompra;
                 var datos='type=17&valor='+valortotal+'&concepto='+concepto+'&fecha='+fechafactura;
                       
                  $.get('ajax.php',datos,function(html){
                           
                       });
              }
                    alert('Compra Guardada');   
                    ventanacostoscompra();
 $.get('modulos/compra/comprar.php',function(html){
            $('.modulos').html(html);
            var f = new Date();
            $('#fechacompra').val(f.getFullYear() + '-' + (f.getMonth() +1) + '-' + f.getDate());
                    

           });

           
            
            
            
            
            
            
           
                 
                 });
        }
}

