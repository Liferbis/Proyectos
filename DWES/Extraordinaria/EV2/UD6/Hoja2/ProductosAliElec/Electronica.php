<?php 

require_once "Productos.php";

class Electronica extends Productos{
	private $plazo;
	private $anioC;

	public function __construct($cod, $precio, $nombre,$plazo){
		parent::__construct($cod, $precio, $nombre);
		$this->plazo=$plazo;
	}

	public function getPlazo(){
		return $this->plazo;
	}

	public function setPlazo($plazo){
		$this->plazo=$plazo;
	}

	public function mostrar(){
		$l=parent::mostrar();
		$l.="<li>Plazo de garantia: ".$this->plazo."</li></ul>";
		return $l;
	}
}
 ?>