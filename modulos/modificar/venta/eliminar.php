<?php

include_once '../../../class/conexion.php';
$id=$_GET['idventa'];
$sqlentrada="select * from venta_producto,venta where venta_producto.idventa=venta.idventa and  venta_producto.idventa like '".$id."'";
$data= mysqli_query($miconexion,$sqlentrada);
$fecha="";
$idproducto="";
$cantidad="";
 while($rs=mysqli_fetch_array($data)){ 
    $fecha=$rs['fecha'];
    $idproducto=$rs['idiventario_producto'];
    $cantidad=$rs['totalmetros'];
}
$idsalidaproducto="";
$sqlsalidaproducto="select * from salida_producto where idinventario_producto like '".$idproducto."' and cantidad like '".$cantidad."' and fecha like '".$fecha."'";

$date= mysqli_query($miconexion,$sqlsalidaproducto);
while($rs=mysqli_fetch_array($date)){ 
    $idsalidaproducto=$rs['idsalida_producto'];
    
}
$sqlborrarventa="delete from venta where idventa like '".$id."'";
mysqli_query($miconexion, $sqlborrarventa);
$sqlborrarventaproducto="delete from venta_producto  where idventa like '".$id."'";
mysqli_query($miconexion, $sqlborrarventaproducto);
$sqlborrarentradacaja="delete from entrada_caja  where concepto like 'venta numero=".$id."'";
echo $idsalidaproducto;
mysqli_query($miconexion, $sqlborrarentradacaja);
$sqlborrarsalidaproducto="delete from salida_producto where idsalida_producto like '".$idsalidaproducto."'";
mysqli_query($miconexion, $sqlborrarsalidaproducto);

$sqlborrarcuentacobrar="delete from cuenta_cobrar where idventa like '".$id."'";
mysqli_query($miconexion, $sqlborrarcuentacobrar);



include_once '../../../class/eventos/eventos.php';
$eventos=new Eventos();
$evento="Borro venta numero ".$id." del ".$fecha;
session_start();
$idusuario=$_SESSION["idusuario"];
$eventos->insertareventos($miconexion, $idusuario, $evento);