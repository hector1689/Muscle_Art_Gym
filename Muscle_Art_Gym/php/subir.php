<?php

include('myDBC.php'); 
//Definir Tamaño de archivo 5MB
define('LIMITE', 5000); 
//Definir arreglo con extensiones permitidas usar serialize
define('ARREGLO', serialize( array('image/jpg', 'image/jpeg', 'image/gif','image/png')));
		
$PERMITIDOS = unserialize(ARREGLO); //Usar unserialize para obtener el arreglo

$subirInformacion = new myDBC(); //Objeto para conexión a BD

	if ($_FILES["hugo"]["error"] > 0){
			echo'<script type="text/javascript">
						alert("Error de FILE Selecciona un Archivo");
						window.location="http://localhost/Muscle_Art_Gym/index.php"
						</script>';
	}
	else {
			
		if (in_array($_FILES['hugo']['type'], $PERMITIDOS) && $_FILES['hugo']['size'] <= LIMITE * 1024){
			
			//Desde subir.php a la carpeta imagenes hay que salir un directorio
			//../imagenes/nombreDeArchivo
			$rutaEnServidor = "../imagenes/" . $_FILES['hugo']['name'];
			
			//Desde index.php, la carpeta imagenes está en imagenes/nombreDeArchivo 
			$ruta = "imagenes/" . $_FILES['hugo']['name'];
			
			if (!file_exists($ruta)){
				$resultado = move_uploaded_file($_FILES["hugo"]["tmp_name"], $rutaEnServidor);
				if ($resultado){
					$name = $_POST['nombre_cliente'];
					$ape = $_POST['apellido_cliente'];
					$tel = $_POST['telefono_cliente'];
					$fecha = $_POST['fecha_pago'];

					$subirInformacion->subirTodo($name, $ape,$tel,$fecha, $ruta);
				
				}else {
					echo'<script type="text/javascript">
						alert("Ocurrió un error al mover archivo");
						window.location="http://localhost/Muscle_Art_Gym/index.php"
						</script>';	
				}
				
			}else{
				
				echo'<script type="text/javascript">
						alert("Este archivo ya existe en la BD");
						window.location="http://localhost/Muscle_Art_Gym/index.php"
						</script>';
			}
		
		}else {
			echo'<script type="text/javascript">
						alert("Tipo de archivo no permitido o excede tamaño");
						window.location="http://localhost/Muscle_Art_Gym/index.php"
						</script>';
		}
	}

?>
