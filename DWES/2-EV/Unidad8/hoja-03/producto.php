<?php 

class producto {
		private $codigo;
		private $nombre;
		private $articulo;
		private $stock;
		private $ruta;
		private $precio;

		public function __construct($codigo, $nombre, $articulo, $precio, $stock, $ruta ){
			$this->codigo=$codigo;
			$this->nombre=$nombre;
			$this->articulo=$articulo;
			$this->precio=$precio;
			$this->stock=$stock;
			$this->ruta=$ruta;
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