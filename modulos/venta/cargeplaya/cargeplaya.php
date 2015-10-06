<table style="text-align: left; width: 200px; height: 100px;" border="1" cellpadding="2" cellspacing="2">

  <tbody>

    <tr>

      <td style="width: 378px;">PROVEEDOR CARGE PLAYA:</td>

      <td style="width: 156px;">
          <select name="lista" id="idproveedorcargeplaya">
          <option value="0">-------</option>
          <?php 
          include_once '../../../class/conexion.php';
          $sql = "SELECT * from proveedor " ;
           $dato=  mysqli_query($miconexion,$sql);
            while ($tabla = mysqli_fetch_array($dato)) {
    
   echo '<option value="'.$tabla['idproveedor'].'">'.$tabla['nombreproveedor'].'</option>';
       };
          ?>
          
      </select>

      </td>

    </tr>

    

    

  

  </tbody>
</table>
<center>
    <button onclick="guardarcargeplayas()">GUARDAR
</button></center>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
