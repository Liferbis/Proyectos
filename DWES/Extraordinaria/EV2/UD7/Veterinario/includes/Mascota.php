<?php 

abstract class Mascota {
	
	protected $id;
	protected $idCliente;
	protected $nombre;
	protected $raza;
	protected $fech;
	protected $historial;

	public function __construct($id, $idCliente, $nombre, $raza, $fech, $historial ){

		$this->id=$id;
		$this->idCliente=$idCliente;
		$this->nombre=$nombre;
		$this->raza=$raza;
		$this->fech=$fech;
		$this->historial=$historial;
	}

	public function getEdad() {
		list($Y,$m,$d) = explode("-",$this->fech);
		return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
	}

	public function __set($var, $valor) {
		if (property_exists(__CLASS__, $var)) {
			$this->$var = $valor;
		} else {
			echo "No existe el atributo $var.";
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