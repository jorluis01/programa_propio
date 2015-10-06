function ventanaproveedor(ventana)
{ 
 var ventana=ventana;
 if (ventana==1){
     var direccion='modulos/compra/proveedor/proveedor.php';
 }
 
 $.get(direccion,function(html){
           
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Buscar Proveedor",
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
function ventanaproducto(ventana,e){
    var ventana=ventana;
    var direccion;
    //alert(ventana);
 if (ventana===1){
    direccion='modulos/compra/producto/producto.php';
     
 }
 if (ventana===2){
    direccion='modulos/venta/producto/producto.php';
       // alert('entra aca');    
     var al = window.open('', 'Espere Porfavor'); 
     window.setTimeout(function() {al.close()}, 1);
         
        
 }
  if (e.keyCode == 113) { 
      
  
  var id='id=0';
        $.get(direccion,id,function(html){
             
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
       } else{
          if (ventana===1){
    ayuda(".productocompra1");
     
 }
 if (ventana===2){
     ayuda("#materialventa");
       // alert('entra aca');    
      
 }
            
            
    }
}

function ventanacliente(e){
   
        if (e.keyCode == 113) { 
       var data="nombre=''";
        $.get('modulos/venta/cliente/cliente.php',data,function(html){
             
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Buscar Cliente",
                         width: 550,
                         minWidth: 400,
                         maxWidth:600 ,
                         show: "fold",
                         hide: "scale",
                         resizable: "false"
                          
                         
                        
                         
		});
                
                return false;
                
       });}else{
            ayuda("clienteventa");
    }  
 }