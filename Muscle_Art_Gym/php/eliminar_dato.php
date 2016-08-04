<?php


error_reporting(E_ALL ^ E_NOTICE);
$id = $_GET['id'];
error_reporting(E_ALL ^ E_DEPRECATED); 
$conexion = mysql_connect("localhost","gym") or die ("No se pudo conectar al servidor de BD");
					mysql_select_db("bd_gym")or die ("No se pudo seleccionar la BD 'mis_contactos'");
					require("funciones.php");


$query = "delete from cliente_gym where id_cliente = '$id'"; 
$result = mysql_query($query); 

 

echo'<script type="text/javascript">
						alert("Se ha Eliminado El Cliente Correctamente");
						window.location="http://localhost/Muscle_Art_Gym/clientes.php"
						</script>';
?> 