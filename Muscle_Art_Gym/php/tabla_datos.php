	<?php
					$conexion = mysql_connect("localhost","gym") or die ("No se pudo conectar al servidor de BD");
					mysql_select_db("bd_gym")or die ("No se pudo seleccionar la BD 'mis_contactos'");
					require("funciones.php");

					$query = "SELECT * FROM cliente_gym ORDER BY id_cliente ASC";
					$queEmp = mysql_query($query, $conexion);

					echo "<link  href = 'dist/css/bootstrap.min.css'  rel = 'stylesheet' type='text/css'/ >  ";
					echo '<div class="zona">';
					echo "<table class='table table-hover'>";
					echo"<tr >";
					echo "<th class='warning'>#</th><th class='warning'>Nombre</th><th class='warning'>Apellido</th><th class='warning'>Telefono</th><th class='warning'>Fecha de Pago</th><th class='warning'>Fecha de Vencimiento</th><th class='warning'>Acciones</th><th class='warning'></th>";
					echo"</tr>";


					
	?>