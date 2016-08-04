<?php
error_reporting(0);
include_once('php/myDBC.php');

$objeto = new myDBC();
$imagenes = $objeto->seleccionar_images();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Muscle Art GYM</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link  href = "dist/css/bootstrap.min.css"  rel = "stylesheet" > 
<script src="dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="images/Sonya-Swarm-Gym.ico">
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function () {
$("#datepicker").datepicker({
firstDay: 1,
monthNames: ['ENERO', 'FEBRERO', 'MARZO',
'ABRIL', 'MAYO', 'JUNIO',
'JULIO', 'AGOSTO', 'SEPTIEMBRE',
'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'],
dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab']
});
});
  </script>
  <script>
  $(function () {
$("#datepicker2").datepicker({
firstDay: 1,
monthNames: ['ENERO', 'FEBRERO', 'MARZO',
'ABRIL', 'MAYO', 'JUNIO',
'JULIO', 'AGOSTO', 'SEPTIEMBRE',
'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'],
dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab']
});
});
  </script>
</head>
<body>





	<header >
	<div class="colorsito">
	
	<nav class="navbar navbar-default">
 
    <div id="logo">
	<p><i class="fa fa-home"></i> Bienvenido
	<img  src="images/gym.png"></p>
	</div>
   
	</nav>
		 
	</div>
	</header><!-- /header -->

	<section id="main">
		
		<section id="articles_list">
	<div class="page-header">
  	<h1><i class="fa fa-users"></i> Resgistro <small>Clientes-Personal</small></h1>
	</div>
		
			<article>
	<div class="well well-lg">	
	<form role="form" action="php/subir.php" method="POST" enctype="multipart/form-data" >
  	
  	<label for="ejemplo_email_1">Nombre</label>
  	<div class="input-group">
  	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
  	<input type="text" class="form-control" name="nombre" required placeholder="Nombre" aria-describedby="basic-addon1">
	</div>

	<label for="ejemplo_email_1">Apellido</label>
  	<div class="input-group">
  	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
  	<input type="email" class="form-control" name="email" required placeholder="Email" aria-describedby="basic-addon1">
	</div>

	<label for="ejemplo_email_1">Telefono</label>
  	<div class="input-group">
  	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
  	<input type="number" class="form-control" min="15" max="70" name="edad" required placeholder="Email" aria-describedby="basic-addon1">
	</div>
  	
  	<label for="ejemplo_email_1">Fecha de Pago</label>
  	<div class="input-group">
  	<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
  	<input type="number" class="form-control"  id="datepicker" name="fecha_pago"r equired placeholder="fecha de pago" aria-describedby="basic-addon1">
	</div>

  	<div class="form-group">
    <label for="ejemplo_archivo_1">Adjuntar Imagen</label>
    <input type="file" name="hugo" id="imagen" />
  	</div>

  	<button type="submit" class="btn btn-success" name="subir"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Enviar</button>
	</form>

	</div>
			</article>
				<article>
				<form id="formulario" action="php/subir.php" method="POST" enctype="multipart/form-data">
					<div class="campos">
						<label > Nick </label>
						<input type="text" name="nombre" required/>
					</div>
					
					<div class="campos">
						<label> Mail </label>
						<input type="email" name="email" required/>
					</div>
					
					<div class="campos">
						<label> Edad </label>
						<input type="number" min="15" max="70" name="edad" required/>
					</div>
					
					<div class="campos">
						<label for="imagen">Imagen:</label>
						<input type="file" name="hugo" id="imagen" />
						<input type="submit" name="subir" value="Subir"/>
					</div>
				</form>
			</article>
		</section>
		<aside>
			<section class="widget">
			</section>
			<section class="widget">
			</section>
		</aside>
	</section>
	<footer>
		<section id="ft_widgets">
			<section class="widget">
				<div class="well well-lg  list-group-item list-group-item-info">	
  					<?php
					foreach($imagenes as  $imagen){
						echo '<div class="todas">';
						echo '<a href="'.$imagen['ruta'].'"><img src="'.$imagen['ruta'].'"/></a>';
						echo '</div>';
					}			 
				?> 
    			</div>
			</section>
		</section>
		<section>
			<section id="copyright">
				<p  class="list-group-item list-group-item-success">Muscle Art GYM Copyright@ 2016</p>
			</section>
		</section>
	</footer>
</body>
</html>
