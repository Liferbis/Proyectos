<?php 
	class articulo{
		protected $titulo;
		protected $fecha;
		protected $descripcion;
		
		function __construct($titulo, $fecha, $descripcion){
		    $this->titulo=$titulo;
			$this->fecha=$fecha;
			$this->descripcion=$descripcion;
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