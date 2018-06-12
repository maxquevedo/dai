<?php
	require('classParticular.php');
	$codigo = $_POST['codigo'];
	$rut = $_POST['rut'];
	$contraseña = $_POST['contraseña'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$emai = $_POST['email'];
	$telefono= $_POST['telefono'];
	$nuevo = new Particular($codigo,$rut,$nombre,$contraseña,"av 12",$email);	
	$nuevo->registrar;
?>