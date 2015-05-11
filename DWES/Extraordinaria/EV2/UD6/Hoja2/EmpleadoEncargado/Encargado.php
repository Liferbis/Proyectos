<?php 

require_once "Empleado.php";

class Encargado extends Empleado{
	
	public function __construct($nombre, $sueldo)	{
		parent::__construct($nombre, $sueldo);
	}

	public function getSueldo(){
		return parent::getSueldo()*1.15;
	}
}
 ?>