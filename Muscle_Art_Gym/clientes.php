<?php include("php/objeto_imagen.php");?>	
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Muscle Art GYM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href = "dist/css/bootstrap.min.css"  rel = "stylesheet" > 
	<link rel="stylesheet" href="dist/css/bootstrap-theme.min.css">
	<link href="dist/css/bootstrap.css" rel="stylesheet">
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/gym.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.7.1.min.js"></script>
  	<script src="js/jquery-ui.js"></script>
  	<script src="js/bootstrap-modal.js"></script>
  	<script src="dist/js/bootstrap.min.js"></script>
  	<script>
  		$(function () {
		$("#datepicker").datepicker({
		firstDay: 1,
		monthNames: ['ENERO', 'FEBRERO', 'MARZO',
		'ABRIL', 'MAYO', 'JUNIO',
		'JULIO', 'AGOSTO', 'SEPTIEMBRE',
		'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'],
		dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
		dateFormat:'yy/mm/dd'
		});
		});
  	</script>
</head>
<body>
<div class="contenido2">
	<header >
	<!-- logos de la pagina-->
			<div class="colorsito">
					<nav>
 						<div id="logo">
								<p><i class="fa fa-home"></i> Bienvenido
								<img  src="images/gym.png"></p>
						</div>
					</nav>

			 </div>
	

	</header><!-- /header -->
	</div>
<div class="contenido">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" ><img class="img-nav" src="images/gym.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span type="submit" class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="clientes.php"><span type="submit" class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Clientes Registrados</a></li>
      </ul>
    <form class="navbar-form navbar-left" action="busqueda.php" method="post" role="search">
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="Buscar Fecha de Pago" name="palabra">
  </div>
  <button type="submit" onclick="if(confirm('Esta seguro de Buscar?') == false){return false;}" name="buscador" value="Buscar" class="btn btn-success btn-sm"><span type="submit" class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar-Cliente</button>
</form>
 
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section id="main">

		<section id="ft_widgets">
			<section class="widget">

				<div class="page-header">
					<div class="list-group-item list-group-item-info">
						<h1><i class="fa fa-users"></i> Clientes </h1>
					</div>
				</div>
		<div class="well well-lg  list-group-item list-group-item-info">
			<!-- fotografias cliente-->
			<div class="panel panel-info">
  				 <div class="panel-heading">
  				 	<div class="page-header">
						<h1><small><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Identificacion</small></h1>
					</div>
  				 </div>
  					<div class="panel-body">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Fotografias-Cliente</button>
			</div>
			</div>
		
  			<div class="panel panel-info">
  			<div class="panel-heading">
			<div class="page-header">
			<h1><small><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Registrados</small></h1>	
			</div>
			</div>
  				 <div class="panel-body">
			<!-- tabla datos-->
  			<?php include("php/tabla_datos.php");?>

				<?php 

				while ($rsEmp = mysql_fetch_assoc($queEmp)) { ?>

  				<tr>
    			<td class='success'><span class="glyphicon glyphicon-user" aria-hidden="true"></span><p class="row"><?php echo $rsEmp['id_cliente']; ?></p> </td>
    			<td class='success'><?php echo $rsEmp['nombre_cliente']; ?></td>
    			<td class='success'><?php echo $rsEmp['apellido_cliente']; ?></td>
    			<td class='success'><?php echo $rsEmp['telefono_cliente']; ?></td>
    			<td class='success'><?php echo $rsEmp['fecha_pago']; ?></td>
    			<td class='success'>
    			<?php 
    				$fecha = date($rsEmp['fecha_pago']);
						$nuevafecha = strtotime ( '+30 day' , strtotime ( $fecha ) ) ;
						$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
 
						echo "<span class='label label-danger'>$nuevafecha</span>";
				?>
				</td>
    			<td class='success'><a href="editar.php?id=<?php echo $rsEmp['id_cliente']; ?>"><button type="submit" class="btn btn-warning" onclick="if(confirm('Esta seguro de Editar?') == false){return false;}"><span type="submit" class="glyphicon glyphicon-book" aria-hidden="true"></span> Editar</button></a>
    			</td>
    			<td class='success'>
    			<a href="php/eliminar_dato.php?id=<?php echo $rsEmp['id_cliente']; ?>"><button type="submit"class="btn btn-danger" onclick="if(confirm('Esta seguro de Eliminar?') == false){return false;}"><span type="submit" class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</button></a>
    			</td>
 				 </tr>
 
  				<?php }  
  				echo "</table>";
  				echo "</div>";
  				?>

  				</div>
			</div>
    	</div>

			</section>
			
		</section>



<footer>
</section>
</div>
		<div class="contenido3">
					<section id="copyright">
						<p  >Muscle Art GYM Copyright@ 2016 <img width="80px" height="80px" src="images/gym.png"></p>
					</section>
				</div>
	</footer>
	<!--ventana fotografia-->

	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      <div class="panel panel-info">

  			<div class="panel-heading">
			<div class="page-header">
            <h3><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Clientes-Fotografia</h3>
         </div>
         </div>
         
       <div class="modal-body">
            <div class=" list-group-item-info">
       		<div class="panel-body">
				<?php include("php/ventana_fotografia.php");?>
				</div>
			</div>
              </div>
         
         
         <div class="modal-footer">
            <a href="#" data-dismiss="modal" class="btn btn-danger"><span type="submit" class="glyphicon glyphicon-remove" aria-hidden="true"></span>  Cerrar</a>
         </div>
         </div>
         </div>
    </div>
  </div>
</div>
</body>
</html>