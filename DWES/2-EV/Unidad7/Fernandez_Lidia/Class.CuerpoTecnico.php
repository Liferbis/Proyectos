<?php 
require_once "Class.Empleado.php";

abstract class CuerpoTecnico extends Empleado{
	protected $puesto;

	function __construct($dni, $idCliente, $nombre, $sueldo, $puesto){
		parent::__construct($dni, $idCliente, $nombre, $sueldo);
		$this->puesto= $puesto;
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