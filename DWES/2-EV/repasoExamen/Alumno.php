<?php 

class Alumno {
	/**
	 * numero de matricula 
	 * @var int
	 */
	public $numMatricula;

	/**
	 * nombre del alumno
	 * @var string
	 */
	public $nombre;

	/**
	 * curso del alumno
	 * @var string
	 */
	public $curso;

	/**
	 * __construct
	 * @param int $numMatricula 
	 * @param string $nombre       
	 * @param string $curso        
	 */
	function __construct($numMatricula, $nombre, $curso){
		$this->numMatricula=$numMatricula;
		$this->nombre=$nombre;
		$this->curso=$curso;
	}

	/**
	 * __set
	 * @param string $var   
	 * @param string $valor 
	 */
	public function __set($var, $valor) {
			if (property_exists(__CLASS__, $var)) {
				$this->$var = $valor;
			} else {
				echo "No existe el atributo $var.";
			}
		}

	/**
	 * __get
	 * @param  string $var 
	 * @return string      
	 */
	public function __get($var) {
		if (property_exists(__CLASS__, $var)) {
			return $this->$var;
		}
		return NULL;
	}
}
 ?>