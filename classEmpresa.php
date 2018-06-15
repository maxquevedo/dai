<?php
	require('conexion_bd.php');
	class Empresa{
		public $rut;
		public $contraseña;	
		public $rutC;
		public $nombreC;
		public $emailC;
		public $telefonoC;


		function __construct($rut,$contraseña,$rutC,$nombreC,$emailC,$telefonoC){
			$this->rut = $rut;
			$this->contraseña = $contraseña;
			$this->rutC = $rutC;
			$this->nombreC = $nombreC;
			$this->emailC = $emailC;
			$this->telefonoC = $telefonoC;
		}


		function registrar(){
			$sql = "INSERT INTO empresa VALUES('','$this->rut','$this->contraseña');";
			if($GLOBALS['db']->Execute($sql)){
				$sql = "INSERT INTO CONTACTO VALUES('$this->rutC','$this->nombreC','$this->emailC','$this->telefonoC','$this->rut')";
				if($GLOBALS['db']->Execute($sql)){
					echo "<script>alert('Registrado con Exito.');</script>";
				}else{
					echo "Algo ha salido mal :(";
				}
				//echo "Registrado";
				sleep(5);
				echo "<script>window.location.href='iniciarSesionEmpresa.php'</script>";
			}else{
				echo "<h1><center>Algo ha salido mal :(</center></h1>";
				//echo "<script>window.location.href='login.php'</script>";
			}			
		}

	}