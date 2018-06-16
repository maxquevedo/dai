<?php
	require('conexion_bd.php');
	if (count($_POST) > 0){
		$sql = "SELECT * FROM particular where email = '{$_POST['user']}' AND password = '{$_POST['pass']}'";
		if ($rs = $GLOBALS['db']->Execute($sql)){
			if($rs->EOF){
				echo "<h1 class='align-middle'><center>Ups, contrasenia o usuario equivocados! </center></h1>";
				echo "<h2><center><a href='iniciarSesion.php'>Click aca para volver al login.</a></center></h2>";
			}else{
				session_start();
				$_SESSION['rut'] = $rs->fields['rut'];
				$_SESSION['codigo'] = $rs->fields['codigo'];
				$_SESSION['nombre']= $rs->fields['nombre'];
				$_SESSION['email'] = $rs->fields['email'];
				$_SESSION['telefono'] = $rs->fields['telefono'];
				echo "<script>alert('Bienvenido ".$rs->fields['nombre']."'); window.location.href='form-envioMuestra.php'</script>";
			}
		}

	}else{
		echo "NO";
	}
?>