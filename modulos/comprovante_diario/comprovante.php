<?php
$fecha=$_GET['fecha'];
   $debitotal=0;
   $cajaventa=0;
   $costosventa=0;
   $compracredito=0;
   $compradebito=0;
   $cuentacobrar=0;
   $creditototal=0;
   $ventadebito=0;
   $costosventa=0;
   $cuentapagar=0;
   $caja=0;
   $ventacredito=0;
   $costosventa=0;;
?>

    <p style="text-align: center"><h1 style="text-align: center">COMPRABANTE DIARIO <?php echo $fecha; ?> </h1> </p>
    <center><table style="width: 700px; height: 56px;" border="1">
      <tbody>
        <tr>
            
          <td style="width: 307.533px;"><center></center></td>
          <td style="width: 200.067px;"><center>DEBITO</center></td>
          <td style="width: 200.067px;"><center>CREDITO</center></td>
          
        </tr>
        <?php
        
        $idproducto;
        include_once '../../class/conexion.php';
       $sql1="select sum(valortotal) as valortotal 
            from cuenta_pagar
            left join compra on (cuenta_pagar.idcompra=compra.idcompra)
            where compra.idcompra is not null and compra.fecha like '".$fecha."'";
            $datos1=  mysqli_query($miconexion,$sql1);
            
             while($rs=mysqli_fetch_assoc($datos1)){
             $compracredito=$rs['valortotal'];
             
         }
         $sql1="SELECT SUM( valor ) AS valortotal
FROM salida_caja
WHERE concepto LIKE  'compra%'
AND fecha like '".$fecha."'";
        
            $datos1=  mysqli_query($miconexion,$sql1);
            
             while($rs=mysqli_fetch_assoc($datos1)){
             $compradebito=$rs['valortotal'];
             
         }
         $sql1="select *
            from compra
            left join cuenta_pagar on (cuenta_pagar.idcompra=compra.idcompra)
            where cuenta_pagar.idcompra is  null and compra.fecha like '".$fecha."' and cuenta_pagar.idcompra=compra.idcompra";
          
           $caja=0;
           
            $datos1=  mysqli_query($miconexion,$sql1);
            
             while($rs=mysqli_fetch_array($datos1)){
            $sql2="select * 
            from salida_caja
            where   concepto like 'compra numero=".$rs['idcompra']."' ";
          
            $datos2=  mysqli_query($miconexion,$sql2);
                 
             while($rs2=mysqli_fetch_assoc($datos2)){
             $caja=$caja+$rs2['valortotal'];
             
             }
             
         }
         $cajasuma=0;
         $sql2="select * 
            from movimientoaja
            where   tipomovimiento < 3 and fecha like '".$fecha."' ";
          
            $datos2=  mysqli_query($miconexion,$sql2);
                 
             while($rs2=mysqli_fetch_assoc($datos2)){
             $cajasuma=$rs2['valor'];
             
             }
             $cajaresta=0;
         $sql2="select * 
            from movimientoaja
            where   tipomovimiento > 2 and fecha like '".$fecha."' ";
          
            $datos2=  mysqli_query($miconexion,$sql2);
                 
             while($rs2=mysqli_fetch_assoc($datos2)){
             $cajaresta=$rs2['valor'];
             
             }
         
         
         
         
         
         
         
         
         
         $sql1="select sum(valorventa) as valortotal 
            from cuenta_cobrar
            left join venta on (cuenta_cobrar.idventa=venta.idventa)
            where venta.idventa is not null and venta.fecha like '".$fecha."'";
        
            $datos1=  mysqli_query($miconexion,$sql1);
            
             while($rs=mysqli_fetch_assoc($datos1)){
             $ventacredito=$rs['valortotal'];
             
         }
         $sql1="select sum(costosventa) as valortotal 
            from cuenta_cobrar
            left join venta on (cuenta_cobrar.idventa=venta.idventa)
            where venta.idventa is not null and venta.fecha like '".$fecha."'";
        
            $datos1=  mysqli_query($miconexion,$sql1);
            
             while($rs=mysqli_fetch_assoc($datos1)){
             $costoventa=$rs['valortotal'];
             
         }
          $sql1="select sum(valorventa) as valortotal 
            from venta
            left join cuenta_cobrar on (cuenta_cobrar.idventa=venta.idventa)
            where cuenta_cobrar.idventa is null and venta.fecha like '".$fecha."'";
            $datos1=  mysqli_query($miconexion,$sql1);
            
             while($rs=mysqli_fetch_assoc($datos1)){
             $ventadebito=$rs['valortotal'];
             
         }
           $sql1="select venta.idventa
            from venta
            left join cuenta_cobrar on (cuenta_cobrar.idventa=venta.idventa)
            where cuenta_cobrar.idventa is null and venta.fecha like '".$fecha."'";
          
           $cajaventa=0;
           
            $datos1=  mysqli_query($miconexion,$sql1);
            
             while($rs=mysqli_fetch_array($datos1)){
            $sql2="select * 
            from entrada_caja
            where  concepto like 'venta numero=".$rs['idventa']."' ";
          
            $datos2=  mysqli_query($miconexion,$sql2);
                 
             while($rs2=mysqli_fetch_assoc($datos2)){
             $cajaventa=$cajaventa+$rs2['valor'];
             
             }
             
             
         }
         $sql1="select sum(venta.costosventa) as valorcoste 
            from venta
            left join cuenta_cobrar on (cuenta_cobrar.idventa=venta.idventa)
            where cuenta_cobrar.idventa is null and venta.fecha like '".$fecha."'";
         
         $datos1=  mysqli_query($miconexion,$sql1);
                 
             while($rs2=mysqli_fetch_assoc($datos1)){
             $costosventa=$rs2['valorcoste'];
             
             }
         
         
        echo "
             <tr>
             
            
          
          <td > COMPRAS CREDITO "; 
        
        
        echo "
          </td>
          <td >$".number_format($compracredito, 0, '.', ',')." "; 
        
        
        echo "
          </td>
          <td > "; 
        
        
        echo "
          </td>
          </tr>
          <tr>
             
            
          
          <td > CUENTA X PAGAR "; 
        
        
        echo "
          </td>
          <td > "; 
        
        
        echo "
          </td>
          <td >$".number_format($compracredito, 0, '.', ',').   ""; 
        
        
        echo "
          </td>
          </tr>
          <tr>
             
            
          
          <td > COMPRAS CONTADO "; 
        
        
        echo "
          </td>
          <td >$".number_format($compradebito, 0, '.', ',').""; 
        
        
        echo "
          </td>
          <td > "; 
        
        
        echo "
          </td>
          </tr>
         
             
            
          
          <td > VENTAS CREDITO "; 
         $cajatotal=$compradebito;
        
        echo "
          </td>
          <td >
          </td>
          
          <td >$".number_format($ventacredito, 0, '.', ',').""; 
       
        
        
        
        echo "
          </td>
          </tr>
          <tr>
             
            
          
          <td > CUENTA X COBRAR "; 
        
        
        echo "
          </td>
          <td > $".number_format($ventacredito, 0, '.', ',').""; 
       
        $valortotalinventario=0;
        $valortotalinventario=$costoventa;
        $costototalinventario=0;
        $costototalinventario=$costosventa;
        echo "
          </td>
          <td >
          </td>
          
          
          

           <tr>
             
            
          
          <td > VENTAS CONTADO "; 
        
        
        echo "
          </td>
          <td >
          </td>
          
          <td >$".number_format($ventadebito, 0, '.', ',').""; 
        
        
        
        
        echo "
          </td>
          </tr>
          <tr>
          
          


             
            
          
          <td > MOVIMIENTO CAJA "; 
        
        
        echo "
          </td>
          <td >$".number_format($cajaresta, 0, '.', ',').""; 
        
        
        echo "
          </td>
          <td >$".number_format($cajasuma, 0, '.', ',')."
          </td>
          </tr>
            <tr>





          <tr>
          


             
            
          
          <td > CAJA "; 
        
        $debitocaja=$cajaventa+$cajasuma;
        $creditocaja=$compradebito+$cajaresta;
        echo "
          </td>
          <td >$".number_format($debitocaja, 0, '.', ',').""; 
        
        
        echo "
          </td>
          <td >$".number_format($creditocaja, 0, '.', ',')."
          </td>
          </tr>
            <tr>
             
            
          
          <td >INVENTARIO "; 
        
        $valortotalinventario=$valortotalinventario+$costosventa;
        echo "
          </td>
          <td >
          </td>
          
          <td >$".number_format($valortotalinventario, 0, '.', ',').""; 
        
        
        
        
        echo "
          </td>
          </tr>
          <tr>
             
            
          
          <td >   COSTO-INVENTARIO "; 
        $costototalinventario=$costototalinventario+$costosventa;
        
        echo "
          </td>
          <td > $".number_format($costototalinventario, 0, '.', ',').""; 
        
              
        echo "
          </td>
          <td >
          </td>
          </tr>
          <tr>
          <td >SUMAS IGUALES
          </td>

<td >
";
        //$debitotal=$compracredito+$compradebito+$cuentacobrar+$costoventa+$cajaventa+$costosventa;
        $creditototal=$compracredito+$compradebito+$ventacredito+$costoventa+$ventadebito+$costosventa+$cajasuma+$creditocaja;
        $debitotal=$creditototal;
        echo "$".number_format($debitotal, 0, '.', ','). "
          </td><td >"; echo "$".number_format( $creditototal, 0, '.', ',')."
          </td>
<tr>
          
          
         "  ;  ?>
      </tbody>
    </table> 
        <h3>UTILIDAD BRUTA</h3>
     <table  border="1"> 
         <tbody>
    <tr>
        <td>
        </td>
        <td >VALORES
        </td>
        
    </tr>
    <tr>
        <td> TOTAL VENTAS
        </td>
        <td > <?php
        
        $totalventa=$ventacredito+$ventadebito;
        echo "$".number_format( $totalventa, 0, '.', ',') ;
        ?>
        </td>
        
    </tr>
    <tr>
        <td> TOTAL COSTOS
        </td>
        <td ><?php
        $totalcosto=$costoventa+$costosventa;
        echo "$".number_format( $totalcosto, 0, '.', ',');
        ?>
        </td>
        
    </tr>
    <tr>
        <td> UTILIDAD BRUTA
        </td>
        <td ><?php
         $utilidad=$totalventa-$totalcosto;
        echo "$".number_format( $utilidad, 0, '.', ',');
        ?>
        </td>
        
    </tr>
    
     </tbody>
    </table> 
        
</div>



