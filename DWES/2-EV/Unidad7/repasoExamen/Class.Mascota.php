<?php 

require_once "Class.clientes.php";

  class Mascota {
	protected $id;
	protected $idCliente;
	protected $nombre;
	protected $raza;
	protected $fechaNacimiento;
	protected $historial;


	public function __construct($id, $idCliente, $nombre, $raza, $fechaNacimiento, $historial){
		$this->id= $id;
		$this->idCliente= $idCliente;
		$this->nombre= $nombre;
		$this->raza= $raza;
		$this->fechaNacimiento= $fechaNacimiento;
		$this->historial= $historial;
	}

	public function __set($var, $valor) {
		if (property_exists(__CLASS__, $var)) {
			$this->$var = $valor;
		} else {
			echo "No existe $var.";
		}
	}

	public function getEdad(){
		// $aux=floor(time()/86400);//hoy->dias 
		// $edad=floor(date_timestamp_set($this->fechaNacimiento)/86400);//:/60/60/24/365
		// $edad=$aux-$edad;
		// return ($edad/365);

		$fechahoy= new DateTime();
		$fec=new DateTime($this->fechaNacimiento);
		$intervalo= $fechahoy->diff($fec);
		$f=floor($intervalo->format('%a')/365);
		return $f;
	}

	public function __get($var) {
		if (property_exists(__CLASS__, $var)) {
			return $this->$var;
		}
		return NULL;
	}
}
 ?>
