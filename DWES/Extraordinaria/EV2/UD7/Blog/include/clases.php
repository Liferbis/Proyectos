<?php 

class Usuario{
	private $dni;
	private $nombre;
	private $ctv;

	function __construct($dni, $nombre, $ctv){
		$this->dni=$dni;
		$this->nombre=$nombre;
		$this->ctv=$ctv;
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

/**
* Clase articulo 
*/
class Articulo{

	private $titulo;
	private $descripcion;
	private $fecha;

	function __construct($titulo, $descripcion, $fecha){
		$this->titulo=$titulo;
		$this->descripcion=$descripcion;
		$this->fecha=$fecha;
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
