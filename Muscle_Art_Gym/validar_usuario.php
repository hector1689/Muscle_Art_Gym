<?php

$conexion=mysql_connect('localhost','gym')or die ('Ha fallado la conexión: '.mysql_error());
 

mysql_select_db('bd_gym')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
  
 error_reporting(E_ALL ^ E_NOTICE);
$usuario = $_POST["nombre"];   
$password = $_POST["password"];
 

$result = mysql_query("SELECT * FROM login WHERE mat = '$usuario'");
 

if($row = mysql_fetch_array($result))
{     

 if($row["password"] == $password)
 {
  
  session_start();  
 
  $_SESSION['usuario'] = $usuario;  

  header("Location: index.php");  
 }
 else
 {
  
  echo"
   <script languaje='javascript'>
    alert('Contraseña Incorrecta');
    location.href = 'login.php';
   </script>";
  
             
 }
}
else
{
 
echo"
 <script languaje='javascript'>
  alert('El nombre de usuario es incorrecto!');
  location.href = 'login.php';
 </script>";

         
}
 
mysql_free_result($result);
 

mysql_close($conexion);
?>