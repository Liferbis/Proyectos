<?php 

	class personas{
		private $codigo;
		private $nombre;
		private $apellido;
		private $dni;
		private $localidad;
		private $becario;

		public function __construct($codigo, $nombre, $apellido, $dni, $localidad, $becario ){
			$this->codigo=$codigo;
			$this->nombre=$nombre;
			$this->apellido=$apellido;
			$this->dni=$dni;
			$this->localidad=$localidad;
			$this->becario=$becario;
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