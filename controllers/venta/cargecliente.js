var idventacarge;
function cargeclienteventa(){
    
    if(cargecliente==0){
        
    }else{
        $.get('modulos/venta/cargecliente/cargecliente.php',function(html){
           
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
function getidventa(e){
    idventacarge=e;
    cargeclienteventa();
    
}
function guardarcargecliente(){
     var cargecliente=$('#idproveedorcargecliente').val();
    var data='type=30&idventa='+idventacarge+'&idproveedorcarge='+cargecliente;
    $.get('ajax.php',data,function(){
        
    });
    $('#ventanaemergentenocierra').dialog('close');
}

