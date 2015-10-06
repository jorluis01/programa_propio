function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;

if ((keynum == 8)||(keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
}
function ayuda(e){
    alert('presione f2 para ayuda');
    $(''+e).val("");
    $(''+e).text("");
}
function fecha(){
    var f = new Date();
            var dia=f.getDate();
            if (dia<10){
                dia="0"+dia;
            }
    
    var fecha=f.getFullYear() + '-' + (f.getMonth() +1) + '-' + dia;
    return fecha;
}
function numerodocumeto(){
    var numero;
    var f = new Date();
            var dia=f.getDate();
            if (dia<10){
                dia="0"+dia;
            }
    
    var numerodocumento=f.getFullYear()+""+(f.getMonth() +1)+""+dia;
    return numerodocumento;
}
function espacionumericovacio(e){
  var numero=document.getElementById(''+e).value;
   var numerovalida=numero; 
  if (numero==""){
      numerovalida="0";
      
  }
   
      
     
   
      
  document.getElementById(''+e).value=parseInt(String(numerovalida));
    
}
function ventainformebuscar(){
    
    var fechainicial=$('#fechaventainicial').val();
    var fechafinal=$('#fechaventafinal').val();
    var data='fecha1='+fechainicial+'&fecha2='+fechafinal
         $.get('modulos/venta/informe/buscador.php',data,function (html){
          
             $('.modulos').html(html);
        });
}


