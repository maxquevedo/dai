<?php
	require('classParticular.php');
	$rut = $_POST['rut'];
	$contraseña = $_POST['contraseña'];
	$nombre = $_POST['nombre'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$telefono= $_POST['telefono'];
	$nuevo = new Particular('',$rut,$nombre,$contraseña,$direccion,$email,$telefono);	
	
	$nuevo->registrar();
?>