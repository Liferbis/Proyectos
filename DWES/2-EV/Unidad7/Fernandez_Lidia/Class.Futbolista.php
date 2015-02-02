<?php 
require_once "Class.Empleado.php";
require_once "IFutbol.php";

class Futbolista extends Empleado implements IFutbol{
	protected $dorsal;
	protected $goles;
	private static $numero=0;

	function __construct($dni, $idCliente, $nombre, $sueldo, $dorsal, $goles){
		parent::__construct($dni, $idCliente, $nombre, $sueldo);
		$this->dorsal= $dorsal;
		$this->goles= $goles;
		self::$numero++;
	}

	public function getSueldo() {
		$sueldo=parent::getSueldo();
		if($goles>0){
			$sueldo=$sueldo+($this->goles*5000);
			return $sueldo;
		}else{
			return $sueldo;
		}
	}

	public function BorraFulbolista(){
		self::$numero--;
	}

	public function getNumFulbolistas() {
		return $this->numero;
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

	public function marcaGol(){
		$this->goles++;
	}

	public function getInfo(){
		echo "Nombre: ".$this->nombre."\nDorsal: ".$this->dorsal;
	}
}
 ?>