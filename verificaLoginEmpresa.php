<?php
	require('conexion_bd.php');
	//print_r($_POST);
	if (count($_POST) > 0){
		$sql = "SELECT * FROM empresa where rutEmpresa = '{$_POST['rutEmpresa']}' AND password = '{$_POST['pass']}'";
		if ($rs = $GLOBALS['db']->Execute($sql)){
			if($rs->EOF){
				echo "<h1 class='align-middle'><center>Ups, contrasenia o usuario equivocados! </center></h1>";
				echo "<h2><center><a href='iniciarSesionEmpresa.php'>Click aca para volver al login.</a></center></h2>";
			}else{
				session_start();
				$_SESSION['codigo'] = $rs->fields['codigo'];
				$_SESSION['rutEmpresa'] = $rs->fields['rutEmpresa'];
				echo "<script>alert('Bienvenido ".$rs->fields['rutEmpresa']."'); window.location.href='form-envioMuestra.php'</script>";
			}
		}

	}else{
		echo "NO";
	}
?>