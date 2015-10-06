$(document).ready(function(){ 
    var convertir;
   var idproducto1;
   var idproducto0;
    $('#productoaconvertir').live('keydown',function(e){
        convertir=0;
         if (e.keyCode == 113) { 
        var id='id=0';
        $.get('modulos/convertir/producto/producto.php',id,function(html){
             
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
    
    $('#productoaconvertir1').live('keydown',function(e){
        convertir=1; 
        if (e.keyCode == 113) { 
        var id='id=0';
        $.get('modulos/convertir/producto/producto.php',id,function(html){
             
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
  
    $('.seleccionarconvertirproducto').live('click',function(){
       
        var idproducto = $(this).attr("id"); 
        var nombre=$('.productonombreinventario'+idproducto).text();
        var bodega=$('.bodegainventario'+idproducto).text();
       
        if(convertir===0){
         idproducto0=idproducto;
         document.getElementById('productoaconvertir').value=nombre;
        document.getElementById('bodegaproductoaconvertir').value=bodega;
        
         }
          if(convertir===1){
              idproducto1=idproducto;
          document.getElementById('productoaconvertir1').value=nombre;
        document.getElementById('bodegaproductoaconvertir1').value=bodega;
         }
        
        //averiguar mas sobre esto
         $('#ventanaemergente').dialog('close');
        
    });
     $('#guardarmaterialconvertir').live('click',function(){
        
         if(confirm('SEGURO QUE DESEA GUARDAR\n\
se guarda bajo su responsabilidad' )){
         
         var cantidad0=document.getElementById('cantidadproductoaconvertir').value;
         var cantidad1=document.getElementById('cantidadproductoaconvertir1').value;
         var concepto=document.getElementById('conceptotransformacion').value;
    var f = new Date();
       var fecha=f.getFullYear() + '-' + (f.getMonth() +1) + '-' + f.getDate();
       var idproveedorcarretaje=$('#idproveedorcarretaje').val();
    var valorcarretaje=$('#valorcarretaje').val();
         var data='type=25&producto0='+idproducto0+'&producto1='+idproducto1+'&cantidad0='+cantidad0+'&cantidad1='+cantidad1+'&fecha='+fecha+'&idproveedorcarretaje='+idproveedorcarretaje+'&valorcarretaje='+valorcarretaje+'&concepto='+concepto;
       
         $.get('ajax.php',data,function(html){
          
    });
    
    
    
    
     $.get('modulos/convertir/convertir.php',function(html){
             
            $('.modulos').html(html);
             document.getElementById('bodegaproductoaconvertir').disabled = true;
             document.getElementById('bodegaproductoaconvertir1').disabled = true;
           });
         }
     });
    
     
});