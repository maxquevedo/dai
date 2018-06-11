<?php
	class Particular{

		public $codigo;
		public $email;

		function __construct($rut,$nombre,$contraseña,$direccion,$cod,$email){
			parent::__construct($rut,$nombre,$contraseña,$direccion);
			$this->codigo = $cod;
			$this->email = $email;	
		}

	}

	require('conexion_bd.php');
?>