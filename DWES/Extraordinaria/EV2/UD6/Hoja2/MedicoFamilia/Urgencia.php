<?php 
require_once "Medico.php";

class Urgencia extends Medico{

	private $unidad;
	
	public function __construct($nombre , $edad , $turno, $unidad){
		parent::__construct($nombre , $edad , $turno);
		$this->unidad=$unidad;
	}
	
	public function GetUnidad (){
		return $this->unidad;
	}

	public function SetUnidad ($unidad){
		$this->unidad=$unidad;
	}

	public function mostrar(){
		$l=parent::mostrar();
		$l.="<li>".$this->unidad."</li></ul>";
		return $l;
	}

}
 ?>