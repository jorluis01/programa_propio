function guardarventa(){
    
    var fecha=getdocumentofechaventa();
    var tipoventa=gettipoventa();
    var idcliente=getidcliente(); 
    var servidumbre=getservidumbre();
    var asopal=getasopal(); 
    var comision1=getcomisionprivada();
    var comision2=getasesorias();
    var comision3=getcomisionventa();
    var costo=getcostototal();
    var valortotal=getvalortotal();
    var idproducto=getidproducto();
    var cantidad=gettotalmetos();
    var vale=getvale();
    var documento=getnumerodocumentoventa();
    var cargeplaya=getcargeplaya();
    var transporteplanta=gettransporteplanta();
    var cargecliente=getcargecliente();
    var carretaje=getcarretaje();
    var destino=$('#destino').val();
    var valortotalproducto=getvalormaterial();
    var idcompra=getidcompra();
    var idventa;
    
   
      var datos='type=18&fecha='+fecha+'&tipoventa='+tipoventa+'&id='+idcliente+'&servidumbre='+servidumbre+'&asopal='+asopal+'&comision1='+comision1+'&comision2='+comision2+'&comision3='+comision3+'&costoventa='+
             costo+'&valorventa='+valortotal+'&idinventario='+idproducto+'&cantidad='+cantidad+'&vale='+vale+'&documento='+documento+'&cargeplaya='+
             cargeplaya+'&transporteplanta='+transporteplanta+'&cargecliente='+cargecliente+'&carretaje='+carretaje;
           
          
            $.get('ajax.php',datos,function(){
                var dato='type=21';
               $.get('ajax.php',dato,function(html){
               idventa=''+html;
                  getidventa(idventa);
                  cargeplayaventa(tipoventa);
                  
             
                var datos='type=19&idventa='+idventa+'&idproducto='+idproducto+'&destino='
                +destino+'&viajes='+viajes+'&metros3='+metros3+'&totalmetros='+totalmetros
                  +'&valorunitario='+valorunitario+'&valortotalproducto='+valortotalproducto;
               $.get('ajax.php',datos,function(html){
                var formapago=$('#formapago').val();
                
                if(formapago==2){
                        
                    var datos='type=20&idventa='+idventa;
              $.get('ajax.php',datos,function(){
                         
                            });
                }
                if(formapago==1){
                    var fecha=$('#fechaventa').val()
                        var concepto="venta numero="+idventa;
                 var datos='type=22&valor='+valortotal+'&concepto='+concepto+'&fecha='+fecha;
                  
                  
              $.get('ajax.php',datos,function(){
                         
                            });
                }
              var viaje=document.getElementById("validatransporte").checked;
              if(viaje==true){
                  var idproveedor=getidproveedortransporte();
                  var valorm3transporte=document.getElementById("valorunitariotransporte").value;
                  var totalviaje=document.getElementById("valortransporte").value;
                  var costoviaje=document.getElementById("costotransporte").value;
                  var idvehiculo=document.getElementById("vehiculo").value;
                  var idconductor=document.getElementById("nombreconductor").value;
                  var datos='type=23&proveedor='+idproveedor+'&venta='+idventa+'&valorm3='+valorm3transporte
                          +'&totalmetros='+totalmetros+'&valorviaje='+totalviaje+'&costoviaje='+costoviaje+
                          '&idvehiculo='+idvehiculo+'&idconductor='+idconductor;
                  $.get('ajax.php',datos,function(){
                         
                            });
              }
              var id = $("#tipoventa").find(':selected').val();
              
                if(id==4){
                 var datos='type=24&idcompra='+idcompra+'&cantidad='+totalmetros+'&fecha='+fecha;
                       $.get('ajax.php',datos,function(html){
                           
                            });
         
         
                }
               $.get('modulos/venta/temporal.php',function(html){
             
                         $('.modulos').html(html);
                         var f = new Date();
                           $('#fechaventa').val(f.getFullYear() + '-' + (f.getMonth() +1) + '-' + f.getDate());
                     });

              
          });
                });
               
               });
          
 
}


