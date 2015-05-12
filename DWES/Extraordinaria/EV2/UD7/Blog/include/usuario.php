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

 ?>