<?php
error_reporting(E_ALL ^ E_NOTICE);
 if ($_POST['buscador'])
 {



$buscar = $_POST['palabra'];


if(empty($buscar))
 {
 	echo "<link  href = 'dist/css/bootstrap.min.css'  rel = 'stylesheet' type='text/css'/ >  ";
 echo " <div class='alert alert-danger' role='alert'><b>No se ha ingresado una palabra o letra para buscar</b></div>";
 }else{
 // Conexión a la base de datos y seleccion de registros
 	error_reporting(E_ALL ^ E_DEPRECATED); 
$con = mysql_connect("localhost","gym") or die ("No se pudo conectar al servidor de BD");
					mysql_select_db("bd_gym")or die ("No se pudo seleccionar la BD 'mis_contactos'");
					



 $sql = "SELECT * FROM cliente_gym WHERE fecha_pago like '%$buscar%' ORDER BY id_cliente";
 $result = mysql_query($sql, $con);



$total = mysql_num_rows($result);



 
 if ($row = mysql_fetch_array($result)){
 	
 echo "<div  class='alert alert-warning' role='alert'>Resultados de Busqueda para: <b>$buscar</b></div>";

 do {
  
 ?>	
      
      <table class="table table-hover">
      <tr>
      <th  class="warning">#</th>
      <th class="warning">Nombre</th>
      <th  class="warning">Apellido</th>
      <th class="warning">Telefono</th>
      <th class="warning">Fecha de Pago</th> 
      <th class="warning">Fecha de Vencimiento</th>
      <th class="warning">Acciones</th> 
      <th class="warning"></th> 
      </tr>
 		  <tr>
  		<td class="success"><span class="glyphicon glyphicon-user" aria-hidden="true"></span><p class="row"><?=$row['id_cliente'];?></p></td>
  		<td class="success"><?=$row['nombre_cliente'];?></td>
  		<td class="success"><?=$row['apellido_cliente'];?></td>
  		<td class="success"><?=$row['telefono_cliente']; ?></td>
      <td class="success"><?=$row['fecha_pago']; ?></td>
      <td class='success'>
          <?php 
            $fecha = date($row['fecha_pago']);
            $nuevafecha = strtotime ( '+30 day' , strtotime ( $fecha ) ) ;
            $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
 
            echo "<span class='label label-danger'>$nuevafecha</span>";
        ?>
        </td>
          <td class='success'><a href="editar.php?id=<?php echo $row['id_cliente']; ?>"><button type="submit"class="btn btn-warning" onclick="if(confirm('Esta seguro de Editar?') == false){return false;}"><span type="submit" class="glyphicon glyphicon-book" aria-hidden="true"></span> Editar</button></a>
          </td>
          <td class='success'>
          <a href="php/eliminar_dato.php?id=<?php echo $row['id_cliente']; ?>"><button type="submit"class="btn btn-danger" onclick="if(confirm('Esta seguro de Eliminar?') == false){return false;}"><span type="submit" class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</button></a>
          </td>
  		</tr>
  		</table>
      

 <?php
 

 } while ($row = mysql_fetch_array($result));
 echo "<div class='alert alert-success' role='alert'>Registros Encontrados : <b>$total</b></div>";
 } else {



echo "<div class='alert alert-danger' role='alert'>No se encontraron resultados para: <b>$buscar</b></div>";
}
}
}
?>