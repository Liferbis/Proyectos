<?php
	class circulo {

		private $radio;

		function __construct($radio){
			$this->radio=$radio;
		}

		// function SetRadio($radio){
		// 	return $this->radio=$radio;
		// }
		// 
		// function GetRadio(){
		// 	return $this->radio;
		// }
		
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