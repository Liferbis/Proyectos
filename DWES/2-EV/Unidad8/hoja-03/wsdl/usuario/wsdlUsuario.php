<?php 
require_once "../../BaseDeDatos.php";

class wsdlUsuario {

	/**
	 * si es correcto true sino false
	 * @param  string
	 * @param  string
	 * @return boolean
	 */
	public function login($nombre, $ctv){
		return BD::verifica($nombre, $ctv);
	}
}
?>