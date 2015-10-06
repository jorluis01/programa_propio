$(document).ready(function(){
    
   var validamaterial;
   var idcliente;
   var idproducto;
   var viajes;
   var metros3;
   var totalmetros;
   var asopal;
   var servidumbre;
   
   var costos;
   var valorunitario;
   var valortotal;
   var idproveedor;
   var valorunitariotransporte;
    var valortransporte;
    var utilidadbruta;
    
    var valortotalcontransporte;
    
  var cantidadmaximaventa; 
  var idcompra;
  var valorcompra;
  
        
  
  $('.seleccionarclienteventa').live('click',function(){
         
             idcliente = $(this).attr("id");
             setidcliente(idcliente);
             var nombre=$('.nombrecliente'+idcliente).text();
              document.getElementById('clienteventa').value =nombre;
             $('#ventanaemergente').dialog('close');
             var id=idtipoventas();
             if(id==4){
                 $('#productocomprado').focus();
             }else{
                  $('#materialventa').focus();
             }
            
            
        });
        
  $('#proveedortransporte').live('keydown',function(e){
       if (e.keyCode == 113) {
           var id='id=0';
         $.get('modulos/compra/proveedor/proveedor.php',id,function(html){
           
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
 
    });
        
     $('.seleccionarcompraproveedor').live('click',function(){
         
        idproveedor = $(this).attr("id"); 
       var nombre=$('.nombreproveedorcompra'+idproveedor).text();
       document.getElementById('proveedortransporte').value =nombre;
       setidproveedortransporte(idproveedor);
         $('#ventanaemergente').dialog('close');
        
    }); 
      
    seleccionarventaproducto();
        
 
   

     
  
 
 

 
 
 
 
 
 
    
     $('#productocomprado').live('keydown',function(e){
       
     
        if (e.keyCode == 113) { 
       var data='nombre=';
        $.get('modulos/venta/productocomprado/productocomprado.php',data,function(html){
             
            $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "Buscar Compra",
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
    
    $('.idcompraproducto').live('click',function(){
          idcompra = $(this).attr("id");
          idproducto=$('#idinventarioproducto'+idcompra).val();
          var nombreproducto=$('.nombreproducto'+idcompra).text();
          var nombrebodega=$('.nombrebodega'+idcompra).text();
          cantidadmaximaventa=$('.cantidadproducto'+idcompra).text();
          setcantidadmaximaventa(cantidadmaximaventa);
          setidproducto(idproducto);
          setidcompra(idcompra);
          
          valorcompra=$('#valorcompraproducto'+idcompra).val();
          setvalorcompra(valorcompra);
          document.getElementById('productocomprado').value=nombreproducto;
          document.getElementById('materialventa').value=nombreproducto;
          document.getElementById('bodegaventa').value=nombrebodega;
           $('#ventanaemergente').dialog('close');
    
        });
  
    $('#productocompradoventa').live('keydown',function(e){
    
    var nombre=document.getElementById("productocompradoventa").value;
    var data='nombre='+nombre;
        $.get('modulos/venta/productocomprado/tabla.php',data,function(html){
         $('#tablaproductoventa').html(html);
        });
        });
    
    
    
    
    
    
    
    
});


