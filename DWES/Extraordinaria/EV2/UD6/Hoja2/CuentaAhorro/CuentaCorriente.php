<?php 

require_once "Cuenta.php";

class CuentaCorriente extends Cuenta{

	protected $cuoM;

	public function __construct($numero , $titular , $saldo, $cuoM){

		parent::__construct($numero , $titular , $saldo);
		$this->cuoM=$cuoM;
		$this->saldo=$this->saldo-$cuoM;
	}

	public function reintegro($cantidad){
		if($this->saldo<=20){
			return false;
		}else{
			$this->saldo=$this->saldo-$cantidad;
			return true;
		}
	}

	public function mostrar(){
		$l=parent::mostrar()."
				<li>".$this->cuoM."€ De cuota mensual</li>
			</ul>";

		return $l;
	}
}

?>