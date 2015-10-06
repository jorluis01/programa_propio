$(document).ready(function(){ 
    var convertir;
   var idproducto1;
   var idproducto2;
    $('#productotransporte1').live('keydown',function(e){
       
        convertir=0;
         if (e.keyCode == 113) { 
        var id='id=0';
        $.get('modulos/compra/producto/producto.php',id,function(html){
             
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Buscar Producto",
                         width: 550,
                         minWidth: 400,
                         maxWidth:600 ,
                         show: "fold",
                         hide: "scale",
                         resizable: "false"
                          
                         
                        
                         
		});
                
                return false;
                
       });
    }
        
        });
    
    $('#productotransporte2').live('keydown',function(e){
          
        convertir=1; 
        if (e.keyCode == 113) { 
        var id='id=0';
        $.get('modulos/compra/producto/producto.php',id,function(html){
             
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Buscar Producto",
                         width: 550,
                         minWidth: 400,
                         maxWidth:600 ,
                         show: "fold",
                         hide: "scale",
                         resizable: "false"
                          
                         
                        
                         
		});
                
                return false;
                
       });
    }
        
        
        
    });
 
    $('.seleccionarcompraproducto').live('click',function(){
        
      var idproducto = $(this).attr("id"); 
        var nombre=$('.productonombreinventario'+idproducto).text();
        var bodega=$('.bodegainventario'+idproducto).text();
       
        if(convertir===0){
         idproducto1=idproducto;
         document.getElementById('productotransporte1').value=nombre;
        document.getElementById('bodegaproductotransporte1').value=bodega;
        
         }
          if(convertir===1){
              idproducto2=idproducto;
          document.getElementById('productotransporte2').value=nombre;
        document.getElementById('bodegaproductotransporte2').value=bodega;
         }
        
        //averiguar mas sobre esto
        
        
    });
     $('#guardarmaterialtransporte').live('click',function(){
        
         var cantidad1=document.getElementById('cantidadproductotransporte1').value;
         var asopal=document.getElementById('valorasopal').value*cantidad1;
         var servidumbre=document.getElementById('valoraservidumbre').value*cantidad1;
         var idproveedorcarge=document.getElementById('idproveedorcargeplaya').value;
         var valorcarge=document.getElementById('valorcargeplaya').value;
         var idproveedortransporte=document.getElementById('idproveedortransporteplanta').value;
         var valortransporte=document.getElementById('valortransporte').value;
         var viajes=document.getElementById('viajesproductotransporte1').value;
         var metros=document.getElementById('metrosproductotransporte1').value;
       var fecha=$('#fechatransportematerial').val();
         var data='type=27&producto1='+idproducto1+'&producto2='+idproducto2+'&cantidad1='+cantidad1+'&fecha='+fecha
         +'&asopal='+asopal+'&servidumbre='+servidumbre+'&idproveedorcarge='+idproveedorcarge+'&valorcarge='+valorcarge
         +'&idproveedortransporte='+idproveedortransporte+'&viajes='+viajes+'&metros='+metros+'&valortransporte='+valortransporte;
       
         $.get('ajax.php',data,function(html){
          
    });
    
    
    
    
     $.get('modulos/transportematerial/transporte.php',function(html){
             
            $('.modulos').html(html);
             document.getElementById('bodegaproductotransporte1').disabled = true;
             document.getElementById('bodegaproductotransporte2').disabled = true;
           });
    
     });
    
    
});
function multiplicaciontraslado(){
    var viajes=$('#viajesproductotransporte1').val();
    var metros=$('#metrosproductotransporte1').val();
    var total=viajes*metros;
    $('#cantidadproductotransporte1').val(total);
}