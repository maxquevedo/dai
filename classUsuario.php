<?php
	abstract class Usuario{
		public $rut;
		public $nombre;
		public $contraseña;
		public $direccion;

		public function __construct($rut,$nomb,$contra,$dir){
			$this->rut = $rut;
			$this->nombre = $nomb;
			$this->contraseña = $contra;
			$this->direccion = $dir;
		}
	}
?>