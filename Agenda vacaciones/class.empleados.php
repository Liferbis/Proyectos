<?php 

	class Empleado{
		private $codigo;
		private $dni;
		private $nombre;
		private $apellido1;
		private $apellido2;
		private $localidad;
		private $movil;
		private $comentarios;

		public function __construct($codigo, $dni, $nombre, $apellido1, $apellido2,  $localidad, $movil, $comentarios ){

			$this->codigo=$codigo;
			$this->dni=$dni;
			$this->nombre=$nombre;
			$this->apellido1=$apellido1;
			$this->apellido2=$apellido2;
			$this->localidad=$localidad;
			$this->movil=$movil;
			$this->comentarios=$comentarios;

		}

		public function 

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

		public function vacaciones(){

			
		}
		protected $diasPropios;
		protected $PermisoRetribuido;
		protected $NoRetribuido;
		protected $baja;
	}
 ?>