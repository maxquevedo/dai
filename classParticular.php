<?php
	require('conexion_bd.php');
	class Particular{
		public $rut;
		public $nombre;
		public $contraseña;
		public $direccion;
		public $codigo;
		public $email;

		function __construct($cod,$rut,$nombre,$contraseña,$direccion,$email){
			$this->rut = 	$rut;
			$this->nombre = $nombre;
			$this->contraseña = $contraseña;
			$this->direccion = $direccion;
			$this->codigo = $cod;
			$this->email = $email;	
		}


		function registrar(){
			$sql ="INSERT INTO Particular VALUES (
			'$this->codigo',
			'$this->rut',
			'$this->nombre',
			'$this->direccion',
			'$this->email')";
			echo $sql;
			if($rs->GLOBALS['db']->Execute($sql)){

			}
		}

	}

