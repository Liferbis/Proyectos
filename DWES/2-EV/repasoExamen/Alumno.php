<?php 

class Alumno {
	public $numMatricula;
	public $nombre;
	public $curso;

	function __construct($numMatricula, $nombre, $curso){
		$this->numMatricula=$numMatricula;
		$this->nombre=$nombre;
		$this->curso=$curso;
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