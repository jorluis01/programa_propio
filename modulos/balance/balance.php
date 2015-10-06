<?php $fecha=$_GET['fecha'];
$fecha2="";
        
?>
<div class="fechabalance">
    <p style=" text-align: center"> MES: <input name="fechacaja" type="month" id="fechabalance"  > </p>
    <p style=" text-align: center"><input name="buscarbalance" type="button" id="buscarbalance" value="Buscar" onclick="mesbalance()" > 
</div>

<center>  <form action="ficheroExcel.php?fecha1=<?php echo $fecha; ?>&fecha2=<?php echo $fecha2; ?>&nombre=balance general " method="post" target="_blank" id="FormularioExportacion">
<p>Exportar a Excel  <img src="export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form></center>

<script language="javascript">
$(document).ready(function() {
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();

});
});
</script>


<div class="balance" id="Exportar_a_Excel">
    <h1 style="text-align: center;">BALANCE GENERAL <?php echo $fecha;  ?></h1>
    
<?php
include_once '../../class/conexion.php';
include_once './inventario.php';
include_once './asopal.php';
include_once './servidumbre.php';
include_once './cargeplaya.php';
include_once './transporteplanta.php';
include_once './cargecliente.php';
include_once './lavado.php';
$cuentasporpagar=$valortotalasopal+$valortotalservidumbre+$valortotalcargeplaya+$valortotaltransporteplanta+$valortotalcargecliente+$valortotallavado;
$sql1="select SUM(valor)as entradas from entrada_caja WHERE idcaja=1 and fecha like '".$fecha."%'";
      
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $entradacaja=$rs['entradas'];
         }
         $sql1="select SUM(valor)as salidas from salida_caja WHERE  idcaja=1 and fecha like '".$fecha."%'";
      
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $salidacaja=$rs['salidas'];
         }
          $sql1="select SUM(valorventa)as valor from cuenta_cobrar,venta WHERE cuenta_cobrar.idventa=venta.idventa and venta.fecha like '".$fecha."%'";
      
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $cuentacobrar=$rs['valor'];
         }
          $sql1="select SUM(valortotal)as valor from cuenta_pagar,compra WHERE cuenta_pagar.idcompra=compra.idcompra and compra.fecha like '".$fecha."%'";
      
        $dato=  mysqli_query($miconexion,$sql1);
         while($rs=mysqli_fetch_array($dato)){ 
           $cuentapagar=$rs['valor'];
         }
          
         
         
         
         
         
        
        
         
         
         
         
         
         
         
$caja=$entradacaja-$salidacaja;


?>
   <center> <table style="width: 480px; height: 70px; " border="1" >
        <tbody>
            <tr>  
                <td style="width: 300px" >  
            1-ACTIVOS
            </td>
            <td>  
           
            </td>
            </tr>
            
            <tr>  
            <td>  
            CAJA
            </td>
            <td style="text-align: right">  
              <?php echo "$".number_format( $caja  , 0, '.', ',');?>
            </td>
            </tr>
            
            <tr>  
            <td>  
            CUENTAS POR COBRAR
            </td>
            <td style="text-align: right">  
              <?php echo"$". number_format($cuentacobrar , 0, '.', ',');?>
            </td>
            </tr>
            
            <tr>  
            <td>  
            INVENTARIO
            </td>
            <td style="text-align: right">  
              <?php echo "$". number_format($valortotalinventario , 0, '.', ',');?>
            </td>
            </tr>
            <tr>  
            <td>  
            TOTAL ACTIVOS
            </td>
            <td style="text-align: right">  
              <?php  $totalactivos=$caja+$cuentacobrar+$valortotalinventario;
              echo "$". number_format($totalactivos , 0, '.', ',');?>
            </td>
            </tr>
            
             <tr>  
                 <td style="height:  20px">  
            
            </td>
            <td>  
              
            </td>
            </tr>
            
            <tr>  
            <td>  
            2-PASIVOS
            </td>
            <td>  
              
            </td>
            </tr>
            
            <tr>  
            <td>  
            CUENTAS POR PAGAR
            </td>
            <td style="text-align: right">  
              <?php
              $cuentapagartotal=$cuentasporpagar+$cuentapagar;
              echo "$". number_format($cuentapagartotal , 0, '.', ','); ?>
            </td>
            </tr>
            
             <tr>  
            <td>  
            ASOPAL
            </td>
            <td style="text-align: right">  
              <?php echo "$". number_format($valortotalasopal , 0, '.', ','); ?>
            </td>
            </tr>
            
             <tr>  
            <td>  
            SERVIDUMBRE
            </td>
            <td style="text-align: right">  
              <?php echo "$". number_format($valortotalservidumbre , 0, '.', ','); ?>
            </td>
            </tr>
            
            <tr>  
            <td>  
            CARGE EN PLAYA
            </td>
            <td style="text-align: right">  
              <?php echo "$". number_format($valortotalcargeplaya , 0, '.', ','); ?>
            </td>
            </tr>
            
            <tr>  
            <td>  
            TRANSPORTE A PLANTA
            </td>
            <td style="text-align: right">  
              <?php echo "$". number_format($valortotaltransporteplanta , 0, '.', ','); ?>
            </td>
            </tr>
            
            <tr>  
            <td>  
            CARGE AL CLIENTE
            </td>
            <td style="text-align: right">  
              <?php echo "$". number_format($valortotalcargecliente , 0, '.', ','); ?>
            </td>
            </tr>
            
            <tr>  
            <td>  
           TRANSFORMACION Y LAVADO
            </td>
            <td style="text-align: right">  
              <?php echo "$". number_format($valortotallavado , 0, '.', ','); ?>
            </td>
            </tr>
            
            <tr>  
            <td>  
            TOTAL PASIVOS
            </td>
            <td style="text-align: right">  
                
              <?php $totalpasivos=$cuentapagar+$valortotalasopal+$valortotalservidumbre+$valortotalcargeplaya+$valortotaltransporteplanta+$valortotalcargecliente+$valortotallavado;
              echo "$". number_format($totalpasivos , 0, '.', ',');?>
            </td>
            </tr>
             <tr>  
            <td  style="height:  20px;">  
          
            </td>
            <td>  
              
            </td>
            </tr>
            <tr>  
            <td>  
            3-PATRIMONIO
            </td>
            <td style="text-align: right">  
              <?php $patrimonio=$totalactivos-$totalpasivos;
              echo "$". number_format($patrimonio , 0, '.', ',');?>
            </td>
            </tr>
            
            
            
        </tbody> 
        
    </table>
    
    
</div>