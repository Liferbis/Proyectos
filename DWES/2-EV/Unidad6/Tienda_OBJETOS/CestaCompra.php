<?php 

include_once "BaseDeDatos.php";

class CestaCompra {
	public $cesta=array();

	public static function nuevoArticulo($codigo){
		$cesta=BD::codigo($codigo);
		$_SESSION['cesta'][]=$cesta;
	}
}
 ?>