

function guardarcostoscompra(){
    var idproveedorcarge=$('#idproveedorcarge').val();
    var valorcarge=$('#valorcarge').val();
     var idproveedortransporte=$('#idproveedortransporte').val();
    var valortrasnporte=$('#valortrasnporte').val();
    var data='type=29&idcompra='+idcompra+'&idproveedorcarge='+idproveedorcarge+'&valorcarge='+valorcarge+'&idproveedortransporte='+idproveedortransporte+'&valortransporte='+valortrasnporte;
    
     $.get('ajax.php',data,function(html){
       
         $("#ventanaemergentenocierra").dialog('close');
      javascript:location.reload() ;
   });
}
function ventanacostoscompra(){
    $.get('modulos/compra/costos/costos.php',function(html){
           
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


