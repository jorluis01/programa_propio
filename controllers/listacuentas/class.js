function SINO(cual) {
   var elElemento=document.getElementById(cual);
   if(elElemento.style.display == 'block') {
      elElemento.style.display = 'none';
   } else {
      elElemento.style.display = 'block';
   }
}