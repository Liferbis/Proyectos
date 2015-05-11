<?php 

class Cuenta {

	protected $numero;
	protected $titular;
	protected $saldo;
	
	function __construct($numero , $titular , $saldo){
		$this->numero=$numero;
		$this->titular=$titular;
		$this->saldo=$saldo;
	}

	public function ingreso($mon){
		$this->saldo+=$mon;
	}

	public function reintegro($mon){
		if ($this->saldo < $mon) {
			return "No tienes suficiente saldo";
		}else{
			$this->saldo-=$mon;
		}
	}

	public function esPreferencial($mon){
		if ($this->saldo > $mon) {
			return true;
		}else{
			return false;
		}
	}

	public function mostrar(){
		$l="<ul>
				<li>Numero: ".$this->numero."</li>
				<li>Titular: ".$this->titular."</li>
				<li>Saldo Inicial:".$this->saldo."€ </li>
			";
		return $l;
	}

}

 ?>