<?php

include_once '../../../class/conexion.php';
$id=$_GET['idtraslado'];
$idproductosale=0;
$idproductoentra=0;
$fecha="";
$cantidad=0;
$idsalidaproducto=0;
$identradaproducto=0;




$sql="select * from transportematerial where idtransporte like '".$id."'";
$data= mysqli_query($miconexion,$sql);
while($rs=mysqli_fetch_array($data)){ 
    $idproductosale=$rs['idinventarioproductosale'];
    $idproductoentra=$rs['idinventarioproductoentra'];
    $fecha=$rs['fecha'];
    $cantidad=$rs['cantidad'];
}
$sql="select * from salida_producto where idinventario_producto like '".$idproductosale."' and fecha like '".$fecha."' and cantidad like '".$cantidad."'";
$data= mysqli_query($miconexion,$sql);
while($rs=mysqli_fetch_array($data)){ 
    $idsalidaproducto=$rs['idsalida_producto'];
}
$sql="select * from entrada_producto where idinventario_producto like '".$idproductoentra."' and fecha like '".$fecha."' and cantidad like '".$cantidad."'";
$data= mysqli_query($miconexion,$sql);
while($rs=mysqli_fetch_array($data)){ 
    $identradaproducto=$rs['identradaproducto'];
}


$sqlborrarsalidaproducto="delete from salida_producto where idsalida_producto like '".$idsalidaproducto."'";
mysqli_query($miconexion, $sqlborrarsalidaproducto);

$sqlborrarentradaproducto="delete from entrada_producto where identradaproducto like '".$identradaproducto."'";
mysqli_query($miconexion, $sqlborrarentradaproducto);

$sqlborrartraslado="delete from transportematerial where idtransporte like '".$id."'";
mysqli_query($miconexion, $sqlborrartraslado);

echo "ELIMINADO";