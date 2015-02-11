<?php 
require_once "../../BaseDeDatos.php";

class wsdlProducto {
	
	/**
	 * Devuelve el precio de un producto
	 * @param  int
	 * @return double
	 */
	public function getPrecio($id){
		$producto=BD::codigo($id);
		$precio=$producto->precio;
		return $precio;
	}

	/**
	 * devuelve solo un producto
	 * @param  int
	 * @return producto
	 */
	public function getProducto($id){
		$producto=BD::codigo($id);
		return $producto;
	}

	/**
	 * devuelve todos los productos
	 * @return producto[]
	 */
	public function getProductos(){
		$productos=BD::cargaProductos();
		return $productos;
	}

	/**
	 * buscador de objeto por una palabra
	 * @param  string
	 * @return producto[]
	 */
	public function busqueda($palabra){
		$producto=BD::buscador();
		return $producto;
	}

	/**
	 * devuelve el de mayor precio
	 * @return producto
	 */
	public function getMayorPrecio(){
		$producto=BD::getMayorPrecio();
		return $producto;
	}
}

 ?>