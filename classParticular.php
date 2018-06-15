<?php
	require('conexion_bd.php');
	class Particular{
		public $codigo;
		public $rut;
		public $contraseña;
		public $nombre;
		public $email;
		public $direccion;
		public $telefono;

		function __construct($cod,$rut,$nombre,$contraseña,$direccion,$email,$telefono){
			$this->rut = 	$rut;
			$this->nombre = $nombre;
			$this->contraseña = $contraseña;
			$this->direccion = $direccion;
			$this->codigo = $cod;
			$this->email = $email;	
			$this->telefono = $telefono;
		}


		function registrar(){
			$sql = "INSERT INTO particular VALUES (
			'',
			'$this->rut',
			'$this->contraseña',
			'$this->nombre',
			'$this->direccion',
			'$this->email',
			'$this->telefono')";
			if($rs = $GLOBALS['db']->Execute($sql)){
				echo "<script>alert('Registrado con exito');</script>";
				echo "<script>window.location.href='iniciarSesion.php'</script>";
			}else{
				echo "<h3>Error</h3>";
				sleep(5);
				echo "<script>window.load.href='login.php'</script>";
			}
		}

	}

