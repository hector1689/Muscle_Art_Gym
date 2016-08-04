		<?php
				error_reporting(E_ALL ^ E_NOTICE);
						echo '<div class="zona2">';
						echo '<table  class="table table-hover">';
						echo '<tr>';
						echo '<th class="warning">#</th><th class="warning">Nombre</th><th class="warning">Apellido</th>
						<th class="warning">Fotografia</th>';
						echo '</tr>';
						foreach($imagenes as  $imagen){
						
						echo '<tr>';
						echo '<td class="success"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$imagen[' 	id_cliente'].'</td>'; 
						echo '<td class="success">'.$imagen['nombre_cliente'].' </td>';
						echo '<td class="success">'.$imagen['apellido_cliente'].' </td>';
						echo '<td id="todas" class="success ">
								<img class="img-thumbnail" src="'.$imagen['ruta'].'"/>
								</td>';
						echo '</tr>';
						
					}		
					echo '</table>';
					echo '</div>';
							 
				?> 