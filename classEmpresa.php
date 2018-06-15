<?php
	require('conexion_bd.php');
	class Empresa{
		public $codigo;
		public $rut;
		public $contraseña;		


		function __construct($cod,$rut,$contraseña){
			$this->codigo = $cod;
			$this->rut = $rut;
			$this->contraseña = $contraseña;
		}


		function registrar(){
			$sql = "INSERT INTO empresa VALUES('','$this->rut','$this->contraseña')";
			echo $sql;
			if($GLOBALS['db']->Execute($sql)){
				echo "holi";
			}else{
				echo "chai";
			}			
		}

	}