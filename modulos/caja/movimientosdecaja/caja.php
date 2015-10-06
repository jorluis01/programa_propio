<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
include_once '../../../class/conexion.php';
$sql1="select SUM(valor)as totalsalida from salida_caja where idcaja=1";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            $salida=$rs['totalsalida'];
         } 
         
$sql1="select SUM(valor)as totalentrada from entrada_caja where idcaja=1";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            $entrada=$rs['totalentrada'];
         }
$sql1="select * from movimientoaja";
       $documento=1000;
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            $documento=$rs['idmovimientocaja'];
         }
         
         if($documento==0){
             $documento=1000;
         }
         
         $documento++;
         $totalcaja=$entrada-$salida;
?>
<html>
<head>

</head>
<body>

<center>
<table style="text-align: center; width: 254px; height: 108px;" border="1" cellpadding="2" cellspacing="2">

  <tbody>

    <tr>

      <td>CAJA</td>

    </tr>

    <tr>

      <td>SALDO ACTUAL:<?php echo number_format( $totalcaja  , 0, '.', ','); ?></td>

    </tr>

    <tr id="nuevosaldocaja">

      <td>NUEVO SALDO: "DESPUES DEL PROCESO"<br>

      </td>

    </tr>

  </tbody>
</table>

<br>

<br>

</center>

<div style="text-align: center;">
<center>
<table style="text-align: center; width: 493px; height: 196px;" border="1" cellpadding="2" cellspacing="2">

  <tbody>

    <tr>

      <td>PROCESOS</td>

    </tr>

    <tr>

      <td>ENTRADAS</td>

    </tr>

    <tr>

        <td style="text-align: left;"><button onclick="cajacuentacobrar(),tipoguardadomovimientocaja(1)">CUENTAS
                POR COBRAR</button><button onclick="tipoguardadomovimientocaja(2),visiblemovimiento()">AJUSTE</button></td>

    </tr>

    <tr>

      <td>SALIDAS</td>

    </tr>

    <tr>

        <td><button onclick="cajacuentapagar(),tipoguardadomovimientocaja(3)">CUENTAS POR PAGAR</button>
            <button onclick="ventanaasopal(),tipoguardadomovimientocaja(4)">ASOPAL</button>
            <button onclick="ventanaservidumbre(),tipoguardadomovimientocaja(5)">SERVIDUMBRE</button>
            <button onclick="ventanacargeplaya(),tipoguardadomovimientocaja(6)">CARGE PLAYA</button>
            <button onclick="ventanatransporte(),tipoguardadomovimientocaja(7)">TRANSPORTE PLANTA</button>
            <button onclick="ventanacargecliente(),tipoguardadomovimientocaja(8)">CARGE CLIENTE</button>
            <button onclick="ventanacarretaje(),tipoguardadomovimientocaja(9)">TRANSFORMACION</button></td>

    </tr>

  </tbody>
</table>

<br>

<div id="procesoscaja">
<table style="text-align: left; width: 494px; height: 144px;" border="1" cellpadding="2" cellspacing="2">

  <tbody>

    <tr>

      <td>FECHA:
      <input name="fechacaja" id="fechacajamovimiento" type="date"> </td>

    </tr>

    <tr>

        <td>DOCUMENTO: <input name="documento" value="<?Php echo $documento; ?>" id="numerodocumentomovimientocaja"></td>

    </tr>

    <tr>

        <td>CONCEPTO:<input name="texto" id="conceptomovimientocaja"></td>

    </tr>

    <tr>

        <td>VALOR:<input name="valor" id="valormovimientocaja"></td>

    </tr>

    <tr>

        <td><button onclick="guardarmovimiento()">GUARDAR</button></td>
    
    </tr>

  </tbody>
</table>

<br>

</div>
</center>

</div>

</body>
</html>
