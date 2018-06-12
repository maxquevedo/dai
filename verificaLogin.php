<?php
	require('conexion_bd.php');
	$sql = "SELECT * FROM usuario where nombreUsuario = '{$_POST['user']}'";
	if ($rs = $GLOBALS['db']->Execute($sql))	
	{
		while (!$rs->EOF)
		{
			if($rs->fields['nombreUsuario'] == $_POST['user'] && $rs->fields['passwordUsuario'] == $_POST['pass']){
				header('Location: index.php');
			}else{
				echo "<script>
						alert('Usuario y/o Contraseña incorrecta(s)');
						window.location.replace('login.php');
					</script>";
			}
			$rs->MoveNext();
		}
	}else{
		echo "ERROR 404";
	}

?>