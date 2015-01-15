<?php 
	
	class producto {
		private static $codigo=0;
		public $nombre;
		public $familia;
		public $precio;

		public function __construct(){
			self::$codigo++;
		}

		public function mostrar(){
			$prod= "Codigo: "
				.$this->codigo.
				"<br> Nombre: "
				.$this->nombre.
				"<br> Familia: "
				.$this->familia.
				"<br> Precio: "
				.$this->precio;
			return $prod;
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

		/*public function setCodigo($nuevo_codigo){
			if(noExisteCodigo($nuevo_codigo)){
				$this->codigo=$nuevo_codigo;
				return true;
			}else{
				return false;
			}
		}

		public function getCodigo(){
			return $this->codigo;
		}
	}

	class Persona {
		private $id;
		private $nombre;
		private $email;

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
*/


 ?>