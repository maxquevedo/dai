<?php
	require('classEmpresa');
	$codigo = $_POST['codigo'];
	$rutEmpresa = $_POST['rutEmpresa'];
	$contraseña = $_POST['contraseña'];
	$rutContacto = $_POST['rutContacto'];
	$nombreContacto = $_POST['nombreContacto'];
	$emailContacto = $_POST['emailContacto'];
	$telefonoContacto = $_POST['telefonoContacto'];

	Empresa nueva = new Empresa($codigo,$rutEmpresa,$contraseña,$rutContacto,$nombreContacto,$emailContacto,$telefonoContacto);	
?>