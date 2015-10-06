<?php
       session_start();
            $usuario= $_SESSION["usuario"];
            
            include_once './class/conexion.php';
            include_once './class/eventos/eventos.php';
             if($usuario==""){
             header("Location: autenticacion/login.php");
            }
            else{
       
       
       
       ?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
      <link href="css/jquery-ui-1.8.4.custom.css" rel="stylesheet" type="text/css"/>
      <link href="css/estilosmenu.css" rel="stylesheet" type="text/css"/>
      <link href="css/tablas.css" rel="stylesheet" type="text/css"/>
    
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    <script src="controllers/servidumbre/detallada/detallada.js" type="text/javascript"></script>
    <script src="controllers/js/libs/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="controllers/js/libs/jquery/jquery-ui-1.8.4.custom.min.js" type="text/javascript"></script>
    <script src="controllers/menu/menu.js" type="text/javascript"></script>
    <script src="controllers/editar/articulo.js" type="text/javascript"></script>
    <script src="controllers/editar/bodega.js" type="text/javascript"></script>
    <script src="controllers/editar/cliente.js" type="text/javascript"></script>
    <script src="controllers/editar/inventario.js" type="text/javascript"></script>
    <script src="controllers/editar/proveedor.js" type="text/javascript"></script>
    <script src="controllers/editar/tipobodega.js" type="text/javascript"></script>
    <script src="controllers/comprar/comprar.js" type="text/javascript"></script>
    <script src="controllers/comprar/guardarcompra.js" type="text/javascript"></script>
    <script src="controllers/comprar/clases.js" type="text/javascript"></script>
    <script src="controllers/comprar/proveedor.js" type="text/javascript"></script>
    <script src="controllers/comprar/producto.js" type="text/javascript"></script>
    <script src="controllers/venta/venta.js" type="text/javascript"></script>
    <script src="controllers/venta/clases.js" type="text/javascript"></script>
    <script src="controllers/venta/cargecliente.js" type="text/javascript"></script>
    <script src="controllers/venta/guardarventa.js" type="text/javascript"></script>
    <script src="controllers/venta/cargeplaya.js" type="text/javascript"></script>
    <script src="controllers/caja/cuentacobrar.js" type="text/javascript"></script>
    <script src="controllers/caja/cuentapagar.js" type="text/javascript"></script>
    <script src="controllers/caja/guardarmovimiento.js" type="text/javascript"></script>
    <script src="controllers/comprar/costos.js" type="text/javascript"></script>
    
    <script src="controllers/convertir/informe.js" type="text/javascript"></script>
    <script src="controllers/servidumbre/detallada/detallada.js" type="text/javascript"></script>
    <script src="controllers/informes/clases/clases.js" type="text/javascript"></script>
    <script src="controllers/convertir/convertir.js" type="text/javascript"></script>
     <script src="controllers/transporte/transporte.js" type="text/javascript"></script>
    <script src="controllers/ajusteinventario/ajusteinventario.js" type="text/javascript"></script>
    <script src="controllers/informes/menu/menu.js" type="text/javascript"></script>
    <script src="controllers/amarreusuario/amarreusuario.js" type="text/javascript"></script>
    <script src="controllers/ventana.js" type="text/javascript"></script>
    <script src="controllers/balance/class.js" type="text/javascript"></script>
    <script src="controllers/modificar/menu.js" type="text/javascript"></script>
    <script src="controllers/modificar/modificarventa.js" type="text/javascript"></script>
    <script src="controllers/modificar/modificartraslado.js" type="text/javascript"></script>
    <script src="controllers/informes/ventafiltrada/ventafiltrada.js" type="text/javascript"></script>
    <script src="controllers/informes/asopal/asopaldetallada.js" type="text/javascript"></script>
    <title></title>
  </head>
  <body>
       <?php
            
            $sql="select * from usuario where usuario='".$usuario."'";
            $dato=  mysqli_query($miconexion,$sql);
            
         while($rs=mysqli_fetch_array($dato)){ 
             $id=$rs['id'];
         }
         $sql="select * from usuario_tipo where idusuario='".$id."'";
            $dato=  mysqli_query($miconexion,$sql);
            
         while($rs=mysqli_fetch_array($dato)){ 
             $tipo=$rs['tipousuario'];
         }
         $_SESSION["idusuario"]=$id;
          $_SESSION["tipousuario"]=$tipo;
          $eventos=new Eventos();
          $evento="inicio de sesion";
          
            $eventos->insertareventos($miconexion, $id, $evento);}
            ?>
    <div class="menu"> <br>
       <ul id="nav">
          
           <li id="paginainicio"><a href="index.php" >Inicio</a></li>
                    <li  ><a>Editar</a>
                        
                                <ul>
                                    <li  id="bodega">Bodegas</li>
                                    <li  id="tipobodega">Tipo Bodega</li>
                                    <li  id="cliente">Cliente</li>
                                    <li  id="proveedor">Proveedor</li>
                                    <li  id="material">Material</li>
                                    <li  id="inventario">Inventario</li>
                                     <?php
            
                                    $usuario= $_SESSION["usuario"];
                                    
                                    if($usuario=="abs"){
                                    echo "<li id='modificarventa' onclick='menumodificarventa()'>Venta</li>";
                                    echo "<li id='modificartraslado' onclick='menumodificartraslado()'>Traslado</li>";
                                         }
            
            ?>
                                </ul>
                            </li>
                              <li  ><a>Procesos</a>
                        
                                <ul >
                                    <li  >Gastos Generales</li>
                                    <li  id="compra">Compra</li>
                                    <li  id="venta">Venta</li>
                                    <li  id="convertirmaterial">Transformacion de Material</li>
                                    <li  id="ajustematerial">Ajuste Inventario</li>
                                     <li  id="transpotematerial">Traslado Entre Bodegas</li>
                                     <li id="caja" >Caja</li>
                                    
                                      
                                     
                                </ul>
                            </li>
                             <li  ><a>Informes</a>
                        
                                <ul >
                                    <li  >Gastos Generales</li>
                                    <li  id="balanceinforme">Balance General</li>
                                    <li  id="cajainforme">movimiento Caja</li>
                                    <li  id="ventainforme">Ventas</li>
                                    <li  id="comprobantediario">Comprobante Diario</li>
                                    <li  id="comprobantecontabilidad">Comprobante De Contabilidad</li>
                                    <li  id="kardexinforme">Kardex</li>
                                    <li  id="inventarioinforme">Inventario valorisado</li>
                                    <li id="Informecompra">Compras</li> 
                                    <li id="Planilla">Planilla</li> 
                                    <li id="trasladoentrebodegas">Traslados entre bodegas</li> 
                                    <li onclick="menuinformetransformacion()">Transformacion de productos</li>
                                    <li id="salidamaterialplaya">Salida Material Playa</li>
                                    <li id="servidumbredetallada" onclick="clickmenuserdetallada()">Servidumbre Detallada</li> 
                                    <li  onclick="menuventafiltrada()">Venta Detallada</li> 
                                    <li  onclick="menuasopal()">Asopal Detallada</li> 
                                    
                                    
                                </ul>
                            </li>
                       <li >
                           Sistema
                        <ul >
                            
                            <li id="cambiarcontra">cambiar contraseña</li>
                            <li><a href="autenticacion/cerrar_sesion.php" >salir</a></li>
                    </ul>
                    </li>
                    
                    
                </ul>
    </div>
    <div class="principal"><br>
        <div class="modulos">
            <?php
            
            $usuario= $_SESSION["usuario"];
            if($usuario==""){
             header("Location: autenticacion/login.php");
            }
            
            ?>
            
            
            
        </div>
    </div>
      <div  id="ventanaemergente" >
             
             </div>  
      <div  id="ventanaemergentenocierra" >
             
             </div>  
      
  </body>
</html>

