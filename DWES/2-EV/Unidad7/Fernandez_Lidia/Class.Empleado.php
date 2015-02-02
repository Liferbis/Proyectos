<?php 

abstract  class Empleado {
  	protected $dni;
	protected $nombre;
	protected $sueldo;


	public function __construct($dni, $idCliente, $nombre, $sueldo){
		$this->dni= $dni;
		$this->nombre= $nombre;
		$this->sueldo= $sueldo;
	}

	public function __set($var, $valor) {
		if (property_exists(__CLASS__, $var)) {
			$this->$var = $valor;
		} else {
			echo "No existe $var.";
		}
	}

	public function getSueldo(){
		return $this->sueldo;
	}

	public function __get($var) {
		if (property_exists(__CLASS__, $var)) {
			return $this->$var;
		}
		return NULL;
	}
}
 ?>