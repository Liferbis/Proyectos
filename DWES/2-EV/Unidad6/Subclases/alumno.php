<?php 
include_once "persona.php";

class alumno extends Persona{
	private $notas;

	public function __construct(){
		parent::__construct();
		$this->notas= array(
			'DAW'->5,
			'DWES'->5,
			'LMSG'->5);
	}
}

 ?>