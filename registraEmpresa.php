<?php
	require('classEmpresa.php');
	$rutEmpresa = $_POST['rutEmpresa'];
	$contraseña = $_POST['contrasena'];
	$rutContacto = $_POST['rutContacto'];
	$nombreContacto = $_POST['nombreContacto'];
	$emailContacto = $_POST['emailContacto'];
	$telefonoContacto = $_POST['telefonoContacto'];

	$Empresa = new Empresa($rutEmpresa,$contraseña,$rutContacto,$nombreContacto,$emailContacto,$telefonoContacto);	
	$Empresa->registrar();
?>