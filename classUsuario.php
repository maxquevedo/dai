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
	function POST_rut(){
		return $this->rut;
	}
	function set_rut($rut){
		$this->rut = $rut;
	}
	public $nombre;
	function POST_nombre(){
		return $this->nomb;
	}
	function set_nombre($nomb){
		$this->nombre = $nomb;
	}
	public $contrasena;
	function POST_contrasena(){
		return $this->contra;
	}
	function set_contrasena($contra){
		$this->contrasena = $contra;
	}
	public $direccion;
	function POST_direccion(){
		return $this->dir;
	}
	function set_contrasena($dir){
		$this->direccion = $dir;
	}
	}
?>
