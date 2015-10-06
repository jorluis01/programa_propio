<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php 
include_once '../../../class/conexion.php';

?>
<html>
<head>

</head>



<body>

<table style="text-align: left; width: 469px; height: 202px;" border="1" cellpadding="2" cellspacing="2">

  <tbody>

    <tr>

      <td style="width: 378px;">PROVEEDOR CARGE PLAYA:</td>

      <td style="width: 156px;">
          <select name="lista" id="idproveedorcarge">
          <option value="0">-------</option>
          <?php 
          $sql = "SELECT * from proveedor " ;
           $dato=  mysqli_query($miconexion,$sql);
            while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idproveedor'].'">'.$tabla['nombreproveedor'].'</option>';
       };
          ?>
          
      </select>

      </td>

    </tr>

    <tr>

      <td style="width: 378px;">VALOR CARGE PLAYA:</td>

      <td style="width: 156px;"><input name="txto" id="valorcarge"></td>

    </tr>

    <tr>

      <td style="width: 378px;">PROVEEDOR TRANSPORTE
PLANTA:</td>

      <td style="width: 156px;">
          <select name="lista" id="idproveedortransporte">
          <option value="0">-------</option>
           <?php 
          $sql = "SELECT * from proveedor " ;
           $dato=  mysqli_query($miconexion,$sql);
            while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idproveedor'].'">'.$tabla['nombreproveedor'].'</option>';
       };
          ?>
      </select>

      </td>

    </tr>

    <tr>

      <td style="width: 378px;">VALOR TRANSPORTE PLANTA:</td>

      <td style="width: 156px;" ><input name="txto" id="valortrasnporte"></td>

    </tr>

  

  </tbody>
</table>

    <button onclick="guardarcostoscompra()">GUARDAR
</button><br>

</body>
</html>
