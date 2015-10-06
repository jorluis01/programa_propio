function cargeplayaventa(tipoventa){
    
    if(tipoventa==1){
        if(cargeplaya>0){
             $.get('modulos/venta/cargeplaya/cargeplaya.php',function(html){
           
            $('#ventanaemergentenocierra').html(html);
            $("#ventanaemergentenocierra").dialog({ 
                         
			 modal: true,
                         title: "Añadir costos",
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
    }
    
    
    
}
function guardarcargeplayas(){
     var cargeplaya=$('#idproveedorcargeplaya').val();
    var data='type=31&idventa='+idventacarge+'&idproveedorcarge='+cargeplaya;
    //alert(data);
    $.get('ajax.php',data,function(){
        
    });
    $('#ventanaemergentenocierra').dialog('close');
}


