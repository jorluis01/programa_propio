var tipoguardado;
var idclienteprovedor;
function tipoguardadomovimientocaja(e){
    tipoguardado=e;
}
function visiblemovimiento(){
    $('#procesoscaja').slideDown('slow',function(){
        
    });
}


function guardarmovimiento(){
    var documento=$('#numerodocumentomovimientocaja').val();
    var concepto=$('#conceptomovimientocaja').val();
    var valor=$('#valormovimientocaja').val();
    var fecha=$('#fechacajamovimiento').val();
   
   idclienteproveedor(tipoguardado);
    var data='type=28&id='+documento+'&tipomovimiento='+tipoguardado+'&idclienteproveedor='+idclienteprovedor+'&concepto='+concepto+'&valor='+valor
    +'&fecha='+fecha;
    
    $.get('ajax.php',data,function(){
        recargacaja();
    });
   
}
function idclienteproveedor(e){
    if(e==1){
     idclienteprovedor=idcliente;
    }
    if(e==2){
        idclienteprovedor=0;
    }
    if(e==3){
        idclienteprovedor=idproveedor;
        
    }
    if(e==4){
         idclienteprovedor=0;
    }
    if(e==5){
         idclienteprovedor=idproveedor;
    }
    
    if(e==6){
     idclienteprovedor=idproveedor;   
    }
    if(e==7){
     idclienteprovedor=idproveedor;   
    }
    if(e==8){
     idclienteprovedor=idproveedor;   
    }
    if(e==9){
     idclienteprovedor=idproveedor;   
    }
}

function ventanaasopal(){
    ventana="modulos/caja/movimientosdecaja/salidas/asopal.php";
    
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
function ventanaservidumbre(){
    var ventana="modulos/caja/movimientosdecaja/salidas/servidumbre.php";
    
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
function ventanacargeplaya(){
    ventana="modulos/caja/movimientosdecaja/salidas/cargeplaya.php";
    
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
function ventanatransporte(){
    ventana="modulos/caja/movimientosdecaja/salidas/transporteplanta.php";
    
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
function ventanacargecliente(){
    ventana="modulos/caja/movimientosdecaja/salidas/cargecliente.php";
    
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
function ventanacarretaje(){
    ventana="modulos/caja/movimientosdecaja/salidas/lavado.php";
    
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
function recargacaja(){
      $.get('modulos/caja/movimientosdecaja/caja.php',function(html){
             
            $('.modulos').html(html);
             $('#fechacajamovimiento').val(fecha());
       
     });
}

