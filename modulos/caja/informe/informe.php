<?PHP
$fecha=$_GET['fecha'];
?>
<head>
    <link href="../../../css/tablas.css" rel="stylesheet" type="text/css"/>
    
</head>
<h1 style="text-align: center">MOVIMIENTO DE CAJA DIA <?php echo $fecha1; ?></h1> 
<div class="tipobodega">
   
    
    

<div id="entradacaja" style = "float: left"><table style="width: 400px; height: 56px;" border="1">
         <h3>ENTRADAS CAJA</h3>
      <tbody style="text-align: center">
        <tr>
          <td ><center>ID</center></td>   
          <td style="width: 307.533px;"><center>VALOR</center></td>
          <td style="width: 200.067px;"><center>FECHA</center></td>
          <td style="width: 200.067px;"><center>CONCEPTO</center></td>
        
        </tr>
       
        <?php
        
       
        include_once '../../../class/conexion.php';
        $sql1="select * from entrada_caja where entrada_caja.fecha like '".$fecha."' and idcaja=1";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            
        echo "
             <tr>
             <td >
        ".$rs["identrada_caja"]."

          </td>
          <td >
             <p style='text-align: center'>".$rs["valor"]."</p> 
          

          </td>
          <td >
          ".$rs["fecha"]."
          </td>
          <td>
          ".$rs["concepto"]."

          </td>
       
        </tr>
         "  ; } ?>
      </tbody>
    </table>  </div>
<div id="salidacaja" ><table style="width: 400px; height: 56px;" border="1">
        <P></P> <h3>SALIDAS CAJA</h3>
        <tbody style="text-align: center">
        <tr>
          <td ><center>ID</center></td>   
          <td style="width: 307.533px;"><center>VALOR</center></td>
          <td style="width: 200.067px;"><center>FECHA</center></td>
          <td style="width: 200.067px;"><center>CONCEPTO</center></td>
        
        </tr>
       
        <?php
        
       
        include_once '../../../class/conexion.php';
        $sql1="select * from salida_caja where salida_caja.fecha like '".$fecha."' and idcaja=1";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            
        echo "
             <tr>
             <td >
        ".$rs["idsalida_caja"]."

          </td>
          <td >
             <p style='text-align: center'>".$rs["valor"]."</p> 
          

          </td>
          <td >
          ".$rs["fecha"]."
          </td>
          <td>
          ".$rs["concepto"]."

          </td>
       
        </tr>
         "  ; } ?>
      </tbody>
    </table>  </div></div> 
<div id="extractocajadia" style="clear: both" ><center><table style="width: 300px; height: 56px; " border="1">
        <div style="text-align: center;" ><h3>MOVIMIENTO TOTAL DIA</h3>
        
            <tbody style="text-align: center;">
        <tr>
          
          <td ><center></center></td>
          <td ><center>VALOR</center></td>
         
        </tr>
       
        <?php
        
       $entrada;
       $salida;
       $entradaanterior;
       $salidaanterior;
       $saldoanterior;
        include_once '../../../class/conexion.php';
        $sql1="select SUM(valor)as totalsalida from salida_caja where salida_caja.fecha like '".$fecha."' and idcaja=1";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            $salida=$rs['totalsalida'];
         } 
          $sql1="select SUM(valor)as totalentrada from entrada_caja where entrada_caja.fecha like '".$fecha."' and idcaja=1";
       
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
            $entrada=$rs['totalentrada'];
         }
        $movimientocaja=$entrada-$salida;
        $sql1="select SUM(valor)as entradas from entrada_caja WHERE fecha < '".$fecha."' and idcaja=1";
      
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $entradaanterior=$rs['entradas'];
         }
         $sql1="select SUM(valor)as salidas from salida_caja WHERE fecha < '".$fecha." ' and idcaja=1";
      
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $salidaanterior=$rs['salidas'];
         }
         $saldoanterior=$entradaanterior-$salidaanterior;
         
        $movimientocaja=$saldoanterior+$entrada-$salida;
         
         ?>
        <tr>
          
          <td ><center>SALDO ANTERIOR</center></td>
          <td ><center> <?php echo $saldoanterior;?>  </center></td>
         
        </tr>
        <tr>
          
          <td ><center>ENTRADA</center></td>
          <td ><center> <?php echo $entrada;?>  </center></td>
         
        </tr>
         <tr>
          
          <td ><center>SALIDA</center></td>
          <td ><center> <?php echo $salida;?>  </center></td>
         
        </tr>
         <tr>
          
          <td ><center>SALDO</center></td>
          <td><center> <?php echo $movimientocaja;?> </center></td>
         
        </tr>
      </tbody>
    </table> </CENTER> </div></div> 

    <p style="text-align: right">
        
     
     </p>
     
</div>

