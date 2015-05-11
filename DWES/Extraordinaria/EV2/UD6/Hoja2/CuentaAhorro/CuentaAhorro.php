<?php 

require_once "Cuenta.php";

class CuentaAhorro extends Cuenta{
	protected $comA;
	protected $int;

	public function __construct($numero , $titular , $saldo, $comA, $int){

		parent::__construct($numero , $titular , $saldo);
		
		$this->saldo=$this->saldo-$comA;
		$this->comA=$comA;
		$this->int=$int;
	}

	public function aplicaInteres(){
		$this->saldo=$this->saldo+(($this->int*$this->saldo)/100);
	}

	public function mostrar(){
		$l=parent::mostrar()."
				<li>".$this->comA."€ de comisión de apertura </li>
				<li>".$this->int."% de interes </li>
			</ul>";

		return $l;
	}
}
 ?>