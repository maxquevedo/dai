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
			$sql ="INSERT INTO particular VALUES (
			'$this->codigo',
			'$this->rut',
			'$this->contraseña',
			'$this->nombre',
			'$this->direccion',
			'$this->email',
			'$this->telefono')";
			echo $sql;
			if($rs = $GLOBALS['db']->Execute($sql)){
				echo "<h3> ¡Registrado con exito! </h3>";
			}else{
				echo "<h3>Error</h3>";
			}
		}

	}

