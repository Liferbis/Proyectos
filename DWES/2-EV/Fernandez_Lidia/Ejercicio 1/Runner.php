<?php 

class Runner{
	public $dni;
	public $nombreYapallidos;
	public $sexo;
	public $tallaCamiseta;
	public $dorsal;
	public $tiempo;

//$dni, $nombreYapallidos, $sexo, $tallaCamiseta, $dorsal, $tiempo;
	function __construct($dni, $nombreYapallidos, $sexo, $tallaCamiseta, $dorsal, $tiempo){
		$this->dni=$dni;
		$this->nombreYapallidos=$nombreYapallidos;
		$this->sexo=$sexo;
		$this->tallaCamiseta=$tallaCamiseta;
		$this->dorsal=$dorsal;
		$this->tiempo=$tiempo;			
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

	public function mostrar(){
		if($this->tiempo>0){
			$t=$this->tiempo/60;
		}else{
			$t=0;
		}
		$cadena="<li>Nombre: ".$this->nombreYapallidos.
					"<ul>
						<li>Dni: ".$this->dni."</li>
						<li>Sexo: ".$this->sexo."</li>
						<li>Talla de Camiseta: ".$this->tallaCamiseta."</li>
						<li>Dorsal: ".$this->dorsal."</li>
						<li>Tiempo: ".$t."</li>
					</ul>
				</li>";
		return $cadena;
	}
}

?>