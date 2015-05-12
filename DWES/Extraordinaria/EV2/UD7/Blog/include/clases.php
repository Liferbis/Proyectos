<?php 

class Usuario{
	private $dni;
	private $nombre;
	private $ctv;

	function __construct($dni, $nombre, $ctv){
		$this->dni=$dni;
		$this->nombre=$nombre;
		$this->ctv=$ctv;
	}
}

/**
* Clase articulo 
*/
class Articulo{
	private $titulo;
	private $descripcion;
	private $fecha;
	private $cod;
	
	function __construct($titulo, $descripcion, $fecha, $cod){
		$this->titulo=$titulo;
		$this->descripcion=$descripcion;
		$this->fecha=$fecha;
		$this->cod=$cod;
	}
}

 ?>
