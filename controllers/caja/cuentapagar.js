
function cajacuentapagar(){
     ventana="modulos/caja/movimientosdecaja/salidas/cuentapagar.php";
    
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
function cogeridcuentapagar(id){
    idproveedor=id;
    
    $('#ventanaemergente').dialog('close');
   
     $('#procesoscaja').slideDown('slow',function(){
        
    });
}
function cogeridasopal(){
    
    $('#ventanaemergente').dialog('close');
   
     $('#procesoscaja').slideDown('slow',function(){
        
    });
            
}
