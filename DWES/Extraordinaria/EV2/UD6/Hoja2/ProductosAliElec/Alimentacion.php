<?php 

require_once "Productos.php";

class Alimentacion extends Productos{
	private $mesC;
	private $anioC;

	public function __construct($cod, $precio, $nombre,$mesC, $anioC){
		parent::__construct($cod, $precio, $nombre);
		$this->mesC=$mesC;
		$this->anioC=$anioC;
	}

	public function getMesC(){
		return $this->mesC;
	}

	public function getAnioC(){
		return $this->anioC;
	}

	public function setMesC($mesC){
		$this->mesC=$mesC;
	}

	public function setAnioC($anioC){
		$this->anioC=$anioC;
	}

	public function mostrar(){
		$l=parent::mostrar();
		$l.="<li>Caducidad: ".$this->mesC."/".$this->anioC."</li></ul>";
		return $l;
	}
}


 ?>