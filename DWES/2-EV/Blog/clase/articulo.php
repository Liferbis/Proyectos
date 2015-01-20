<?php 
	class articulo{
		protected $titulo;
		protected $date;
		protected $descripcion;
		protected $codigo;
		
		function __construct($titulo, $descripcion){
		    self::$codigo++;
		    $this->titulo=$titulo;
			$this->date=date('D'-'d'-'n'-'Y');
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