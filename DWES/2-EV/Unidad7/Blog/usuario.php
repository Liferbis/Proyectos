<?php

class usuario {
	private $usuario;

	function __construct($usuario){
		$this->usuario=$usuario;
	}
	
	public static function getUsuario(){
		return $this->usuario;
	}

}

 ?>