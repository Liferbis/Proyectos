<?php 

/**
* 
*/
class Productos {
	private $cod  ;
	private $precio;
	private $nombre;
	
	public function __construct($cod, $precio, $nombre){
		$this->cod=$cod;
		$this->precio=$precio;
		$this->nombre=$nombre;
	}

	public function getCod(){
		return $this->cod;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setCod($cod){
		$this->cod=$cod;
	}

	public function setPrecio($precio){
		$this->precio=$precio;
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

	public function mostrar(){
		$l="<h3>Nombre: ".$this->nombre."</h3>
			<ul>
				<li>Codigo: ".$this->cod."</li>
				<li>Precio:".$this->precio."</li>
			";
		return $l;
	}



}
 ?>