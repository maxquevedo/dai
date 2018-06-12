<?php
	class Empresa{
		public $rut;
		public $nombre;
		public $contraseña;
		public $direccion;
		public $codigo;


		function __construct($rut,$nombre,$contraseña,$direccion,$cod){
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