<?php
	class Empresa{

		public $codigo;


		function __construct($rut,$nombre,$contraseña,$direccion,$cod){
			parent::__construct($rut,$nombre,$contraseña,$direccion);
			$this->codigo = $cod;
		}

	}
?>