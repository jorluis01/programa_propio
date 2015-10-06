var idtipoventa;
var viajes;
var metros3;
var totalmetros;
var asopal;
var servidumbre;
var cargeplaya;
var transporteplanta;
var cargecliente;
var carretaje;
var costos=0;
var cantidadmaximaventa;
var valorunitario;
var valortotal;
var utilidadbruta;
var valortotalproducto;
var comisionespecial;
var costoasesoria;
var comisionporventa;
var costotransporte;
var valormaterial;
var valortransporte;
var idcliente;
var idproducto;
var idcompra;
var idproveedortransporte;
var valorcompra=0;
var regalias;//regalias acuerdece de hacerlas
function setcantidadmaximaventa(cantidad){
    cantidadmaximaventa=cantidad;
}

function tipoventa(){
    var id = $("#tipoventa").find(':selected').val();
    inhabilitartodaslaventa();
           if(id==1){
            
           habilitarplaya();
           $('#clienteventa').focus();
           }
           if(id==2){
               habilitarcrudoplanta();
                $('#clienteventa').focus();
           
           }if(id==3){
               habilitarmaterialtrnasformado();
                $('#clienteventa').focus();
          
           }
       
        if(id==4){
               
            
              habilitarcompraexterna();
               $('#clienteventa').focus();
           }
    idtipoventa=id;
    
    
    
}
function idtipoventas(){
    return idtipoventa;
}
function inhabilitartodaslaventa(){
           document.getElementById('asopal').value =0;
           document.getElementById('servidumbre').value =0;
           document.getElementById('cargeplaya').value =0;
           document.getElementById('transporteplanta').value =0;
           document.getElementById('cargecliente').value =0;
           document.getElementById('carretajelavado').value =0;
            document.getElementById('valortransporte').value =0;
             document.getElementById('comisionprivada').value =0;
           document.getElementById('asesorias').value =0;
           document.getElementById('comisionventa').value =0;
           document.getElementById('costotransporte').value =0; 
           document.getElementById('clienteventa').disabled = true;
           document.getElementById('productocomprado').disabled = true;
           document.getElementById('formapago').disabled = true;
           document.getElementById('materialventa').disabled = true;
           document.getElementById('bodegaventa').disabled = true;
           document.getElementById('destino').disabled = true;
           document.getElementById('vale').disabled = true;
           document.getElementById('viajes').disabled = true;
           document.getElementById('metros3').disabled = true;
           document.getElementById('totalmetros').disabled = true;
           document.getElementById('valorunitario').disabled = true;
           document.getElementById('valormaterial').disabled = true;
           document.getElementById('validatransporte').disabled = true;
           document.getElementById('proveedortransporte').disabled = true;
           document.getElementById('valorunitariotransporte').disabled = true;
           document.getElementById('vehiculo').disabled = true;
           document.getElementById('nombreconductor').disabled = true;
           document.getElementById('valortransporte').disabled = true;
           document.getElementById('costotransporte').disabled = true; 
           document.getElementById('costotransportem3').disabled = true; 
           document.getElementById('costotransporte').disabled = true;
           document.getElementById('servidumbre').disabled = true;
           document.getElementById('asopal').disabled = true;
           document.getElementById('servidumbre').disabled = true;
           document.getElementById('cargeplaya').disabled = true;
           document.getElementById('transporteplanta').disabled = true;
           document.getElementById('cargecliente').disabled = true;
           document.getElementById('carretajelavado').disabled = true;
           document.getElementById('comisionprivada').disabled = true;
           document.getElementById('asesorias').disabled = true;
           document.getElementById('comisionventa').disabled = true;
           document.getElementById('valortotal').disabled = true;
           document.getElementById('costosventa').disabled = true;
           document.getElementById('utilidadbruta').disabled = true;
           
          
           
}
function habilitarplaya(){
    document.getElementById('asopal').value =1500;
    document.getElementById('servidumbre').value =1500;
    document.getElementById('cargeplaya').value =0;
    document.getElementById('transporteplanta').value =0;
    document.getElementById('cargecliente').value =0;
    document.getElementById('carretajelavado').value =0;
    
           document.getElementById('cargeplaya').value =0;
           document.getElementById('transporteplanta').value =0;
           document.getElementById('cargecliente').value =0;
           document.getElementById('carretajelavado').value =0;
            document.getElementById('valortransporte').value =0;
             document.getElementById('comisionprivada').value =0;
           document.getElementById('asesorias').value =0;
           document.getElementById('comisionventa').value =0;
           document.getElementById('costotransporte').value =0; 
    document.getElementById('clienteventa').disabled = false;
    document.getElementById('materialventa').disabled = false;
    document.getElementById('formapago').disabled = false;
    document.getElementById('destino').disabled = false;
    document.getElementById('vale').disabled = false;
    document.getElementById('viajes').disabled = false;
    document.getElementById('metros3').disabled = false;
    document.getElementById('cargeplaya').disabled = false;
    document.getElementById('validatransporte').disabled = false;
    document.getElementById('valorunitario').disabled = false;
    document.getElementById('valormaterial').disabled = false;
     document.getElementById('asopal').disabled =false;
    document.getElementById('servidumbre').disabled =false;
    document.getElementById('comisionprivada').disabled = false;
           document.getElementById('asesorias').disabled = false;
           document.getElementById('comisionventa').disabled = false;
}
function habilitarcrudoplanta(){
    document.getElementById('asopal').value =1500;
    document.getElementById('servidumbre').value =1500;
    document.getElementById('cargeplaya').value =2000;
    document.getElementById('transporteplanta').value =3000;
    document.getElementById('cargecliente').value =2000;
    document.getElementById('carretajelavado').value =0;
    
    document.getElementById('valortransporte').value =0;
   document.getElementById('comisionprivada').value =0;
   document.getElementById('asesorias').value =0;
   document.getElementById('comisionventa').value =0;
   document.getElementById('costotransporte').value =0; 
    
    document.getElementById('clienteventa').disabled = false;
    document.getElementById('materialventa').disabled = false;
    document.getElementById('formapago').disabled = false;
    document.getElementById('destino').disabled = false;
    document.getElementById('vale').disabled = false;
    document.getElementById('viajes').disabled = false;
    document.getElementById('metros3').disabled = false;
    document.getElementById('valortransporte').disabled = false;
    document.getElementById('validatransporte').disabled = false;
    document.getElementById('valorunitario').disabled = false;
    document.getElementById('valormaterial').disabled = false;
    document.getElementById('asopal').disabled =false;
    document.getElementById('servidumbre').disabled =false;
    document.getElementById('cargeplaya').disabled =false;
    document.getElementById('transporteplanta').disabled =false;
    document.getElementById('cargecliente').disabled =false;
    document.getElementById('comisionprivada').disabled = false;
           document.getElementById('asesorias').disabled = false;
           document.getElementById('comisionventa').disabled = false;
}
function habilitarmaterialtrnasformado(){
    document.getElementById('asopal').value =1500;
    document.getElementById('servidumbre').value =1500;
    document.getElementById('cargeplaya').value =2000;
    document.getElementById('transporteplanta').value =3000;
    document.getElementById('cargecliente').value =2000;
    document.getElementById('carretajelavado').value =4000;
    document.getElementById('valortransporte').value =0;
   document.getElementById('comisionprivada').value =0;
   document.getElementById('asesorias').value =0;
   document.getElementById('comisionventa').value =0;
   document.getElementById('costotransporte').value =0; 
    
    document.getElementById('clienteventa').disabled = false;
    document.getElementById('materialventa').disabled = false;
    document.getElementById('formapago').disabled = false;
    document.getElementById('destino').disabled = false;
    document.getElementById('vale').disabled = false;
    document.getElementById('viajes').disabled = false;
    document.getElementById('metros3').disabled = false;
    
    document.getElementById('validatransporte').disabled = false;
    document.getElementById('valorunitario').disabled = false;
    document.getElementById('valormaterial').disabled = false;
    document.getElementById('asopal').disabled = false;
    document.getElementById('servidumbre').disabled = false;
    document.getElementById('cargeplaya').disabled = false;
    document.getElementById('transporteplanta').disabled = false;
    document.getElementById('carretajelavado').disabled = false;
    document.getElementById('comisionprivada').disabled = false;
           document.getElementById('asesorias').disabled = false;
           document.getElementById('comisionventa').disabled = false;
}
function habilitarcompraexterna(){
    document.getElementById('asopal').value =0;
    document.getElementById('servidumbre').value =0;
    document.getElementById('cargeplaya').value =2000;
    document.getElementById('transporteplanta').value =0;
    document.getElementById('cargecliente').value =2000;
    document.getElementById('carretajelavado').value =0;
    document.getElementById('valortransporte').value =0;
   document.getElementById('comisionprivada').value =0;
   document.getElementById('asesorias').value =0;
   document.getElementById('comisionventa').value =0;
   document.getElementById('costotransporte').value =0; 
    document.getElementById('clienteventa').disabled = false;
    document.getElementById('productocomprado').disabled = false;
    document.getElementById('formapago').disabled = false;
    document.getElementById('destino').disabled = false;
    document.getElementById('vale').disabled = false;
    document.getElementById('viajes').disabled = false;
    document.getElementById('metros3').disabled = false;
    
   
    document.getElementById('validatransporte').disabled =false;
    document.getElementById('valorunitario').disabled = false;
    document.getElementById('valormaterial').disabled = false;
    document.getElementById('cargeplaya').disabled = false;
    document.getElementById('cargecliente').disabled = false;
    document.getElementById('transporteplanta').disabled = false;
    document.getElementById('comisionprivada').disabled = false;
           document.getElementById('asesorias').disabled = false;
           document.getElementById('comisionventa').disabled = false;
}

function metrosventa(){
    
     viajes=document.getElementById('viajes').value;
   metros3=document.getElementById('metros3').value;
   var asopalm3=document.getElementById('asopal').value;
   var servidumbrem3=document.getElementById('servidumbre').value;
   var cargeplayam3=document.getElementById('cargeplaya').value;
    var transporteplantam3=document.getElementById('transporteplanta').value;
    var cargeclientem3=document.getElementById('cargecliente').value;
   var carretajem3=document.getElementById('carretajelavado').value;
  
        
   
   
   totalmetros=viajes*metros3;
    asopal=asopalm3*totalmetros;
      
    servidumbre=servidumbrem3*totalmetros;
    cargeplaya=cargeplayam3*totalmetros;
    transporteplanta=transporteplantam3*totalmetros;
    cargecliente=cargeclientem3*totalmetros;
    carretaje=carretajem3*totalmetros;
    
    costos=asopal+servidumbre+cargeplaya+transporteplanta+cargecliente+carretaje;
    
    
   document.getElementById('totalmetros').value =totalmetros;
    var id = $("#tipoventa").find(':selected').val();
   if(id==4){
   var  valorcosto=valorcompra*totalmetros;   
   costos=costos+valorcosto;
   if(totalmetros>cantidadmaximaventa){
            alert("Cantidad del Producto Supera lo Comprado");
            document.getElementById('totalmetros').value =0;
            document.getElementById('metros3').value =0;
   }}
   document.getElementById('costosventa').value =costos;
       

}
function viajesventa(){
    
    
    
    
}
function valorunitarioventa(){
     valorunitario=document.getElementById('valorunitario').value;
     valortotalproducto=valorunitario*totalmetros;
     
    
     document.getElementById('valormaterial').value =valortotalproducto;
    
     
}
function valortotalventaproducto(){
    var varlototal=document.getElementById('valormaterial').value;
     valortotalproducto=varlototal/totalmetros;
     
    
     document.getElementById('valorunitario').value =valortotalproducto;
     
 }
 
 
 
function validatransporte(){
    var bandera=document.getElementById("validatransporte").checked;
       
      if (bandera==false){
          
     document.getElementById('proveedortransporte').disabled = true;
     document.getElementById('valorunitariotransporte').disabled = true;
     document.getElementById('vehiculo').disabled = true;
     document.getElementById('nombreconductor').disabled = true;
      document.getElementById('valortransporte').disabled = true;
           document.getElementById('costotransporte').disabled = true;    
            document.getElementById('costotransportem3').disabled = true; 

      }
      if (bandera==true){
      document.getElementById('costotransporte').disabled = false;      

     document.getElementById('proveedortransporte').disabled = false;
     document.getElementById('valorunitariotransporte').disabled = false;
       document.getElementById('valortransporte').disabled = false;
     document.getElementById('vehiculo').disabled = false;
     document.getElementById('nombreconductor').disabled = false;
       document.getElementById('costotransporte').disabled = false; 
      document.getElementById('costotransportem3').disabled = false; 
      
      }
     
}
 function valorunitariotransporte(){
      var valorunitariotransporte=document.getElementById('valorunitariotransporte').value;
     var valortransporte=valorunitariotransporte*totalmetros;
      
     
     document.getElementById('valortransporte').value =valortransporte;
     
      }
 function valortotaltransporte(){
     var valortotaltrasnporte=document.getElementById('valortransporte').value;
     var valortransporte=valortotaltrasnporte/totalmetros;
      
     
     document.getElementById('valorunitariotransporte').value =valortransporte;
     
      
 }
 function valorunitariocostetransporte(){
     var valorunitariotransporte=document.getElementById('costotransportem3').value;
     var valortransporte=valorunitariotransporte*totalmetros;
      
     
     document.getElementById('costotransporte').value =valortransporte;
 }
 function valortotalcostetransporte(){
     var valorunitariotransporte=document.getElementById('costotransporte').value;
     var valortransporte=valorunitariotransporte/totalmetros;
      
     
     document.getElementById('costotransportem3').value =valortransporte;
 }
function seleccionarventaproducto(){
     $('.seleccionarventaproducto').live('click',function(){
        
         idproducto = $(this).attr("id"); 
        var nombre=$('.productonombreinventario'+idproducto).text();
        var bodega=$('.bodegainventario'+idproducto).text();
      document.getElementById('materialventa').value =nombre;
      document.getElementById('bodegaventa').value =bodega;
      
      //averiguar mas sobre esto
         $('#ventanaemergente').dialog('close');
         $('#destino').focus();
    });
}
function gananciasventa(){

valortotal=0;
  valormaterial=parseInt(String($('#valormaterial').val()));   
  valortransporte=parseInt(String($('#valortransporte').val()));
 
 valortotal=valormaterial+valortransporte;
 
 $('#valortotal').val(valortotal); 
    utilidadventa();
}
function costosventa(){
    costos=0;
    
 asopal=parseInt(String($('#asopal').val()))*totalmetros;
 servidumbre=parseInt(String($('#servidumbre').val()))*totalmetros;
 cargeplaya=parseInt(String($('#cargeplaya').val()))*totalmetros;
 transporteplanta=parseInt(String($('#transporteplanta').val()))*totalmetros;
 cargecliente=parseInt(String($('#cargecliente').val()))*totalmetros;
 carretaje=parseInt(String($('#carretajelavado').val()))*totalmetros;
 comisionespecial=parseInt(String($('#comisionprivada').val()));
 costoasesoria=parseInt(String($('#asesorias').val()));
 comisionporventa=parseInt(String($('#comisionventa').val()));
 costotransporte=parseInt(String($('#costotransporte').val()));
 var valorcompras=valorcompra*totalmetros;
 costos=asopal+servidumbre+cargeplaya+transporteplanta+cargecliente+carretaje+comisionespecial+costoasesoria+comisionporventa+costotransporte+valorcompras;
 $('#costosventa').val(costos);  
    utilidadventa();
}
function utilidadventa(){
    utilidadbruta=valortotal-costos;
    $('#utilidadbruta').val(utilidadbruta);
}
function setidcliente(e){
    idcliente=e;
    
}
function setidproveedortransporte(e){
    idproveedortransporte=e;
};
function getidproveedortransporte(){
    return idproveedortransporte;
};
function setidproducto(e){
    idproducto=e;
}
function setidcompra(e){
    idcompra=e;
}
function getidcompra(){
    return idcompra;
}
function getidcliente(){
    return idcliente;
}
function getdocumentofechaventa(){
     var fecha=$('#fechaventa').val();
     return fecha;
}
function getnumerodocumentoventa(){
    var numero=$('#numeroventadocumento').val();
    return numero;
}
function gettipoventa(){
    var tipoventa=$('#tipoventa').val(); 
            return tipoventa;
}
function setvalorcompra(e){
    valorcompra=e;
}

function getvalormaterial(){
    return valormaterial;
}
function getvalortransporte(){
    return valortransporte;
}

function getvalortotal(){
    return valortotal;
}
function getcostototal(){
    return costos;
}
function getasopal(){
    return asopal;
}
function getservidumbre(){
    return servidumbre;
}
function getcargeplaya(){
    return cargeplaya;
}
function gettransporteplanta(){
    return transporteplanta;
}
function getcargecliente(){
    return cargecliente;
}
function getcarretaje(){
    return carretaje;
}
function getvale(){
    var vale=$('#vale').val();
    return vale;
}
function getcomisionprivada(){
    var comisionprivada=$('#comisionprivada').val();
    return comisionprivada;
}
function getasesorias(){
    var comision=$('#asesorias').val();
    return comision;
}
function getcomisionventa(){
    var comision=$('#comisionventa').val();
    return comision;
}
function getidproducto(){
    return idproducto;
}
function gettotalmetos(){
    return totalmetros;
}







