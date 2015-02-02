<?php 
require_once "Class.Mascota.php";

class Gato extends Mascota implements IMaulla{
	
	function __construct($id, $idCliente, $nombre, $raza, $fechaNacimiento, $historial){
		parent::__construct($id, $idCliente, $nombre, $raza, $fechaNacimiento, $historial);
	}

	public function maulla(){
		echo "El gato maulla";
	}

	public function __set($var, $valor) {
		if (property_exists(__CLASS__, $var)) {
			$this->$var = $valor;
		} else {
			echo "No existe $var.";
		}
	}
	
	public function __get($var) {
		if (property_exists(__CLASS__, $var)) {
			return $this->$var;
		}
		return NULL;
	}
}
 ?>