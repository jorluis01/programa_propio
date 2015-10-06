<?php
session_start();
$idusuario=$_SESSION["idusuario"];
include_once './class/bodega/tipobodega.php';
include_once './class/conexion.php';
include_once './class/bodega/bodega.php';
include_once './class/cliente/cliente.php';
include_once './class/proveedor/proveedor.php';
include_once './class/articulo/articulo.php';
include_once './class/inventario/inventario.php';
include_once './class/compra/compra.php';
include_once './class/entrada_producto/entrada_producto.php';
include_once './class/compra_producto/compra_producto.php';
include_once './class/cuenta_pagar/cuenta_pagar.php';
include_once './class/salidacaja/salidacaja.php';
include_once './class/venta/venta.php';
include_once './class/salidaproducto/salidaproducto.php';
include_once './class/ventaproducto/ventaproducto.php';
include_once './class/cuenta_cobrar/cuenta_cobrar.php';
include_once './class/entrada_caja/entradacaja.php';
include_once './class/viaje/viaje.php';
include_once './class/ventacompra/ventacompra.php';
include_once './class/convetirmaterial/convertirmaterial.php';
include_once './class/ajusteinventario/ajusteinventario.php';
include_once './class/eventos/eventos.php';
include_once './class/transportematerial/transportematerial.php';
include_once './class/movimientocaja/movimientocaja.php';
include_once './class/costoscompra/costoscompra.php';

$tipobodega=new Tipobodega();
$bodega=new Bodega();
$cliente=new Cliente();
$proveedor=new Proveedor();
$articulo=new Articulo();
$inventario=new Inventario();
$compra=new Compra();
$entradaproducto=new Entrada_producto();
$compraproducto=new Compra_producto();
$cuentapagar=new Cuenta_Pagar();
$salidacaja=new Salida_caja();
$venta=new Venta();
$salidaproducto= new Salida_producto();
$ventaproducto=new Venta_Producto();
$cuantacobrar=new Cuenta_cobrar();
$entradacaja=new Entrada_caja();
$viaje= new Viaje();
$ventacompra=new Ventacompra();
$convertirmaterial=new ConvertirMaterial();
$ajusteinventario=new Ajuste_Inventario();
$eventos=new Eventos();
$transporte=new Transporte_Material();
$movimientocaja=new Movimientocaja();
$costoscompra=new Costo_compra();
        

$type = $_GET['type'];
switch ($type) {
    case 1:
        $tipobodega=new Tipobodega();
        $tipobodega->insertarbodega($miconexion,$_GET);
        $eventos=new Eventos();
        $evento="Insertar Tipo Bodega Nueva";
        $eventos->insertareventos($miconexion, $idusuario, $evento);
        break; 
    case 2:
        $tipobodega=new Tipobodega();
        $tipobodega->editarbodega($miconexion, $_GET);
        $eventos=new Eventos();
        $evento="Editar Tipo Bodega ";
        $eventos->insertareventos($miconexion, $idusuario, $evento);
        break;
    case 3:
        $bodega=new Bodega();
        $bodega->insertarbodega($miconexion, $_GET);
        $eventos=new Eventos();
        $evento="Insertar Bodega Nueva";
        $eventos->insertareventos($miconexion, $idusuario, $evento);
        
        break;
    case 4:
        $bodega=new Bodega();
        $bodega->editarbodega($miconexion, $_GET);
        $eventos=new Eventos();
        $evento="Editar Bodega";
        $eventos->insertareventos($miconexion, $idusuario, $evento);
        
        break;
    
    case 5:
        $cliente=new Cliente();
        $cliente->insertarcliente($miconexion, $_GET);
        break;
    case 6:
        $cliente=new Cliente();
        $cliente->editarcliente($miconexion, $_GET);
        break;
    case 7:
        $proveedor=new Proveedor();
        $proveedor->insertarproveedor($miconexion, $_GET);
        break;
    case 8:
        $proveedor=new Proveedor();
        $proveedor->editarproveedor($miconexion, $_GET);
        break;
    case 9:
        $articulo=new Articulo();
        $articulo->insertararticulo($miconexion, $_GET);
        break;
    case 10:
        $articulo=new Articulo();
        $articulo->editararticulo($miconexion, $_GET);
        break;
    case 11:
        $inventario=new Inventario();
        $inventario->insertararticuloinventario($miconexion, $_GET);
        
        break;
    case 12:
        $inventario=new Inventario();
        $inventario->editararticuloinventario($miconexion, $_GET);
        
        break;
    case 13:
        $compra=new Compra();
        $compra->insertarcompra($miconexion, $_GET);
        
        
        $compra=new Compra();
        $numero=$compra->seleccionarultimoid($miconexion);
        while($rs=mysqli_fetch_assoc($numero)){
             echo $rs["id"];
         }
        
        break;
    case 14:
        $entradaproducto=new Entrada_producto();
       $entradaproducto->insertarentrada($miconexion, $_GET);
        
        
        $entradaproducto=new Entrada_producto();
        $numero=$entradaproducto->seleccionarultimoid($miconexion);
        while($rs=mysqli_fetch_assoc($numero)){
             echo $rs["id"];
         }
         
        break;
    case 15:
        $compraproducto=new Compra_producto();
        $compraproducto->insertarcompraproducto($miconexion, $_GET);
      
        break;
     case 16:
          $cuentapagar=new Cuenta_Pagar();
        $cuentapagar->insertarcuentapagar($miconexion,$_GET);
         break;
      case 17:
          $salidacaja=new Salida_caja ();
        $salidacaja->insertarsalidacaja($miconexion,$_GET);
        
         break;
      case 18:
          $venta=new Venta();
          $venta->insertarventa($miconexion, $_GET);
         
          $salidaproducto= new Salida_producto();
          $salidaproducto->insertarsalida($miconexion,$_GET);
          
          
          
         break;
    case 19:
        $ventaproducto=new Venta_Producto();
        $ventaproducto->insertarventaproducto($miconexion, $_GET);
        
        break;
    case 20:
    $cuentacobrar=new Cuenta_cobrar();
        $cuentacobrar->insertarcuentacobrar($miconexion, $_GET);
        break;
    case 21:
        $venta=new Venta();
          $numero=$venta->seleccionarultimoid($miconexion);
          while($rs=mysqli_fetch_assoc($numero)){
             echo $rs["id"];
         }
        break;
    case 22:
        $entradacaja=new Entrada_caja();
        $entradacaja->insertarentradacaja($miconexion, $_GET);
        
        break;
    case 23:
        $viaje=new Viaje();
        $viaje->insertarviaje($miconexion, $_GET);
        
        
        break;
    case 24:
        $ventacompra=new Ventacompra();
         $ventacompra->insertarventacompra($miconexion, $_GET);
         break;
    case 25:
        $convertirmaterial=new ConvertirMaterial();
        $convertirmaterial->insertarconvertirmaterial($miconexion, $_GET);
        $salidaproducto=new Salida_producto();
        $salidaproducto->insertarsalidaconvertir($miconexion, $_GET);
        $entradaproducto=new Entrada_producto();
        $entradaproducto->insertarentradaconvertir($miconexion, $_GET);
        
        break;
    case 26:
        $tipo=$_GET['tipo'];
        $identradasalida;
        if($tipo==1){
            $entradaproducto=new Entrada_producto();
        $entradaproducto->insertarentradaajuste($miconexion, $_GET);
       
        $sql1='select max(identradaproducto) as valor from entrada_producto';
       $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $identradasalida=$rs["valor"];
         }
                ;
        } 
        if($tipo==2){
            $salidaproducto=new Salida_producto();
        $salidaproducto->insertarsalidaajuste($miconexion, $_GET);
        
         $sql1='select max(idsalida_producto) as valor from salida_producto';
         $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
             $identradasalida=$rs["valor"];
         }
        }
        
        $ajusteinventario=new Ajuste_Inventario();
        $ajusteinventario->insertarajusteinventario($miconexion, $_GET,$identradasalida);
        break;
    case 27:
       $transporte=new Transporte_Material();
        $transporte->insertartransportematerial($miconexion, $_GET);
        $salidaproducto=new Salida_producto();
        $salidaproducto->insertarsalidatransporte($miconexion, $_GET);
        $entradaproducto=new Entrada_producto();
        $entradaproducto->insertarentradatransporte($miconexion, $_GET);
        
        
         break;
    case 28:
        $movimientocaja=new Movimientocaja();
        $movimientocaja->insertarmovimiento($miconexion, $_GET);
        
        $tipoguardado=$_GET['tipomovimiento'];
        if($tipoguardado>0&&$tipoguardado<3){
            $entradacaja=new Entrada_caja();
            $entradacaja->insertarentradacaja($miconexion, $_GET);
        }
        else{
            $salidacaja=new Salida_caja();
            $salidacaja->insertarsalidacaja($miconexion, $_GET);
                    
        }
         break;
    case 29:
        //guarda costos de la compra
        $costoscompra=new Costo_compra();
        $costoscompra->insertarcostoscompra($miconexion, $_GET);
        break;
    case 30:
        $venta=new Venta();
        $venta->editarventa($miconexion, $_GET);
        break;
    case 31:
        $venta=new Venta();
        $venta->editarventaplaya($miconexion, $_GET);
        break;
       
}




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

