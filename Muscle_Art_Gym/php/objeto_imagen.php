<?php
	error_reporting(0);
	include_once('php/myDBC.php');

	$objeto = new myDBC();
	$imagenes = $objeto->seleccionar_images();
	?>