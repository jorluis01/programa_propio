
 var ventana="";
 var idproveedor;
 var idcliente;
function cajacuentacobrar(){
   
   ventana="modulos/caja/movimientosdecaja/entradas/cuentacobrar/cuentacobrar.php";
  $.get(ventana,function(html){
         $('#ventanaemergente').html(html);
            $("#ventanaemergente").dialog({ 
                         
			 modal: true,
                         title: "",
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



function cogeridcuentacobrar(id){
    idcliente=id;
  
    $('#ventanaemergente').dialog('close');
    $('#procesoscaja').slideDown('slow',function(){
        
    });
}




