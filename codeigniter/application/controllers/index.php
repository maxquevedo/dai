<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {

	public function hola (){
		$this->load->view('prueba');
	}
}
