<?php 

include_once "BaseDeDatos.php";

class CestaCompra {
	public $cesta;

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

	public static function nuevoArticulo($codigo){
		$producto=BD::codigo($codigo);
		$_SESSION['cesta'][]=$producto;
		print_r($_SESSION['cesta']);
	}

}
 ?>