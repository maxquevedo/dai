<?php

include "../entidades/usuariosDatos.php";
class usuariosControlador{
      function insertarUsuarios($usuario,$pass){
		$obj = new usuariosDatos();
		return $obj->insertarUsuarios($usuario,$pass);
	  }
      function validar($usuario,$pass){
        $obj = new usuariosDatos();
		return $obj->validar($usuario,$pass);
      }
}

?>
