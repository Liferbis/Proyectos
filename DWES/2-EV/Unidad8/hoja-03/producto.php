<?php 

class producto {
		/**
		 * $codigo
		 * @var int
		 */
		public $codigo;

		/**
		 * $nombre
		 * @var string
		 */
		public $nombre;

		/**
		 * $articulo
		 * @var string	
		 */
		public $articulo;

		/**
		 * $stock
		 * @var int
		 */
		public $stock;

		/**
		 * $ruta
		 * @var string
		 */
		public $ruta;

		/**
		 * $precio
		 * @var double
		 */
		public $precio;

		/**
		 * construct 
		 * @param int
		 * @param string
		 * @param string
		 * @param double
		 * @param int
		 * @param string
		 */
		public function __construct($codigo, $nombre, $articulo, $precio, $stock, $ruta ){
			$this->codigo=$codigo;
			$this->nombre=$nombre;
			$this->articulo=$articulo;
			$this->precio=$precio;
			$this->stock=$stock;
			$this->ruta=$ruta;
		}

		/**
		 * __set
		 * @param string
		 * @param string
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
		 * @param  string
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