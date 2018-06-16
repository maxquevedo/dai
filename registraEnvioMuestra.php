<?php
	session_start();
	require('conexion_bd.php');
	$codigo = rand();
	date_default_timezone_set('America/Santiago');
	$fecha = date("d/m/y h:i:s");
	$rut = $_SESSION['rut'];
	$medida = $_POST['medida'];
	$tipo = $_POST['tipoMuestra'];
	$opcionMedida = $_POST['opcionMedida'];
	$sql = "INSERT INTO ANALISISMUESTRAS VALUES ('','$tipo','$opcionMedida','$fecha','$medida','$codigo','$rut')";
	if($GLOBALS['db']->Execute($sql)){
		echo "<script>alert('Se ha registrado la muestra correctamente');</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
?>