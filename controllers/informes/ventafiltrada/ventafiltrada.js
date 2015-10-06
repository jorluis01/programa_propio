var idclienteventafiltrada="";
 var nombrecliente="";

function menuventafiltrada(){
    $.get('modulos/venta/ventafiltrada/buscador.php',function(html){
        $('.modulos').html(html);
         idclienteventafiltrada="";
    });
}
 $('.seleccionarclientefiltrada').live('click', function(){
     idclienteventafiltrada="";
        idclienteventafiltrada=$(this).attr("id");
       
        nombrecliente=$('.nombrecliente'+idclienteventafiltrada).text();
        
        document.getElementById('clientefiltrado').value= nombrecliente;
         $('#ventanaemergente').dialog('close');
        
        
   });

function buscarventafiltrado(){
    var fecha1=$('#fechaventainicial').val();
    var fecha2=$('#fechaventafinal').val();
    var idcliente=idclienteventafiltrada;
    var tipoventa=$('#formapago').val();
    
    var datos='fecha1='+fecha1+'&fecha2='+fecha2+'&idcliente='+idcliente+'&tipoventa='+tipoventa;
    $.get('modulos/venta/ventafiltrada/informe.php',datos,function(html){
        $('#informeventafiltrada').html(html);
         idclienteventafiltrada="";
    });
    
}
    

function ventanaclientefiltrado(){
    $('#clientefiltrado').live('keydown',function(e){
        if (e.keyCode == 113) {
          $.get('modulos/venta/ventafiltrada/cliente/cliente.php',function(html){
        
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
        
        
        
        
        
        
        }); 
        }
        
    });
}


