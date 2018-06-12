<?php
	class Empresa{
		public $rutE;
		public $nombre;
		public $contraseña;
		public $direccion;
		public $codigo;


		function __construct($cod,$rutE,$nombre,$contraseña,$direccion,){
			$this->rut = $rut;
			$this->nombre = $nombre;
			$this->contraseña = $contraseña;
			$this->direccion = $direccion;
			$this->codigo = $cod;
		}

		require('conexion_bd.php');

		function guardar(){
			$sql = "INSERT INTO VALUES();"
			echo "-- FUNCIONO --";
		}

	}
?>