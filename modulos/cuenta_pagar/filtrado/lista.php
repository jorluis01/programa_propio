<link href="listacuentas.css" rel="stylesheet" type="text/css"/>
<script src="../../../controllers/listacuentas/class.js" type="text/javascript"></script>

<h2>CUENTAS</h2>
<p onclick="SINO('cuentasporpagar')" style=" color: red;">-CUENTAS POR PAGAR</p>
<div id="cuentasporpagar"> <p onclick="SINO('Compras')">---COMPRAS</p>
    <div id="Compras" class="subcuentas">
      <?php
      include_once '../../../class/conexion.php';
      include_once './cuentaspagar/compras.php';
      ?>
               
    </div><p onclick="SINO('Asopal')">---ASOPAL</p>
    <div id="Asopal" class="subcuentas">
      <?php
      
      include_once './cuentaspagar/asopal.php';
      ?>
               
    </div><p onclick="SINO('Servidumbre')">---SERVIDUMBRE</p>
    <div id="Servidumbre" class="subcuentas">
      <?php
      
      include_once './cuentaspagar/servidumbre.php';
      ?>
               
    </div><p onclick="SINO('Cargeplaya')">---CARGEPLAYA</p>
     <div id="Cargeplaya" class="subcuentas">
      <?php
      
      include_once './cuentaspagar/cargeplaya.php';
      ?>
               
    </div><p onclick="SINO('Transporteplanta')">---TRANSPORTE A PLANTA</p>
    <div id="Transporteplanta" class="subcuentas">
      <?php
      
      include_once './cuentaspagar/transporteplanta.php';
      ?>
               
    </div><p onclick="SINO('Cargecliente')">---CARGE A CLIENTE</p>
    <div id="Cargecliente" class="subcuentas">
      <?php
      
      include_once './cuentaspagar/cargecliente.php';
      ?>
        
               
    </div><p onclick="SINO('Transformacion')">---TRANSFORMACION</p>
    <div id="Transformacion" class="subcuentas">
      <?php
      
      include_once './cuentaspagar/lavado.php';
      ?>
        
               
    </div>
    
    
    
</div>
    
<p onclick="SINO('cuentasporcobrar')" style=" color: red;">-CUENTAS POR COBRAR</p>
<div id="cuentasporcobrar">
  <p onclick="SINO('Ventas')">---VENTAS</p>
    <div id="Ventas" class="subcuentas">
      <?php
     
      include_once './cuentasporcobrar/cuentacobrar.php';
      ?>  
    
    
</div>

<?php



