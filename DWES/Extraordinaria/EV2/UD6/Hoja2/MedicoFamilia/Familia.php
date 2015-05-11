<?php 
require_once "Medico.php";

class  Familia extends Medico{

	private $num_pacientes;
	
	public function __construct($nombre , $edad , $turno, $num_pacientes){
		parent::__construct($nombre , $edad , $turno);
		$this->num_pacientes=$num_pacientes;
	}
	
	public function GetNP (){
		return $this->num_pacientes;
	}

	public function SetNP ($num_pacientes){
		$this->num_pacientes=$num_pacientes;
	}

	public function mostrar(){
		$l=parent::mostrar();
		$l.="<li>".$this->num_pacientes."</li></ul>";
		return $l;
	}

}
 ?>