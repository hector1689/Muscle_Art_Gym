<?php


error_reporting(E_ALL ^ E_DEPRECATED); 
$conexion = mysql_connect("localhost","gym") or die ("No se pudo conectar al servidor de BD");

mysql_select_db("bd_gym")or die ("No se pudo seleccionar la BD 'mis_contactos'");

require("funciones.php");
error_reporting(E_ALL ^ E_NOTICE);
$idcliente = getParam($_GET["id"], "-1");
$action = getParam($_GET["action"], "");

if ($action == "edit") {
	$idcliente = sqlValue($_POST["id_cliente"], "int");
	$nombre = sqlValue($_POST["nombre_cliente"], "text");
	$apellido = sqlValue($_POST["apellido_cliente"], "text");
	$telefono = sqlValue($_POST["telefono_cliente"], "text");
	$fecha = sqlValue($_POST["fecha_pago"], "text");
	
	$sql = "UPDATE  cliente_gym SET ";
	$sql.= "nombre_cliente=".$nombre.", apellido_cliente=".$apellido.", telefono_cliente=".$telefono.", fecha_pago=".$fecha."";
	$sql.= "WHERE id_cliente=".$idcliente;
	mysql_query($sql, $conexion);
	echo'<script type="text/javascript">
						alert("Se ha Editado El Cliente Correctamente");
						window.location="http://localhost/Muscle_Art_Gym/clientes.php"
						</script>';
}

$sql = "SELECT * FROM  cliente_gym WHERE id_cliente = ".sqlValue($idcliente, "int");
$queEmp = mysql_query($sql, $conexion);
$rsEmp = mysql_fetch_assoc($queEmp);
$total = mysql_num_rows($queEmp);
if ($total == 0) {
	header("location: index.php");
	exit;
}
?>