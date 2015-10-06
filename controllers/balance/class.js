function mesbalance(){
    var fecha=$('#fechabalance').val();
   var dato='fecha='+ fecha;
        $.get('modulos/balance/balance.php',dato,function (html){
             $('.modulos').html(html);
              });
    
}