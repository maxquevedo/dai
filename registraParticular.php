<?php
	require('classParticular.php');
	$codigo = $_POST['codigo'];
	$rut = $_POST['rut'];
	$contraseña = $_POST['contraseña'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$telefono= $_POST['telefono'];
	$nuevo = new Particular($codigo,$rut,$nombre,$contraseña,$direccion,$email,$telefono);	
	
	$nuevo->registrar();
?>