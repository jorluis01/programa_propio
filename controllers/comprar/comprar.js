$(document).ready(function(){
     var idproveedor;
    $('#nitproveedorcompra').live('keydown',function(e){
       if (e.keyCode == 113) { 
            ventanaproveedor(1);
    }
    else{
            ayuda("nitproveedorcompra");
    }
 
    });
     $('.seleccionarcompraproveedor').live('click',function(){
         
        idproveedor = $(this).attr("id"); 
        var nit=$('.nitproveedorcompra'+idproveedor).text();
        var nombre=$('.nombreproveedorcompra'+idproveedor).text();
        $('#nitproveedor').val(idproveedor); 
        $('#nitproveedorcompra').val(nit);
        $('#nombreproveedorcompra').val(nombre);
         $('#ventanaemergente').dialog('close');
        
    });
     $('#guardarcompra').live('click',function(){
         
         if($('#numerodocumento').val()===""||$('#nitproveedorcompra').val()===""||$('.productocompra1').text()===""
                 ||$('.viajescompra1').text()===""||$('.totalm3compra1').text()===""||$('.valorunitariocompra1').text()===""){
            alert("Espacio Vacio");
            
         }
         else{
             if(numerodocumeto()===$('#numerodocumento').val()){
                alert("Escriba Numero Documento");   
             }
              else{
                 
              guardarcompra();
                
             }
         }
      
    });
    
});
