<?php
	class Empresa{

		public $codigo;


		function __construct($rut,$nombre,$contraseña,$direccion,$cod){
			parent::__construct($rut,$nombre,$contraseña,$direccion);
			$this->codigo = $cod;
		}

		require('conexion_bd.php');

		function guardar(){
			$sql = "INSERT INTO VALUES();"
			echo "-- FUNCIONO --";
		}

	}
?>