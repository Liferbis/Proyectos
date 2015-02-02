<?php 

require_once "Class.Empleado.php";
require_once "Class.CuerpoTecnico.php";

class Entrenador extends CuerpoTecnico {
	protected $aniosEnClub;

	function __construct($dni, $idCliente, $nombre, $sueldo, $aniosEnClub){
		parent::__construct($dni, $idCliente, $nombre, $sueldo);
		$this->aniosEnClub= $aniosEnClub;
	}

	public function getSueldo(){
		$sueldo=parent::getSueldo();
		if( ($this->aniosEnClub)>=10 && ($this->aniosEnClub)<=20 ){
			$sueldo+=($sueldo*0.01);
			return $sueldo;
		}else if ($this->aniosEnClub>20){
			$sueldo+=($sueldo*0.02);
			return $sueldo;
		}else{
			return $sueldo;
		}
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
} ?>