<?php 

abstract class  Medico {

	protected $nombre;
	protected $edad;
	protected $turno;
	
	function __construct($nombre , $edad , $turno){
		$this->nombre=$nombre;
		$this->edad=$edad;
		$this->turno=$turno;
	}
	
	public function GetNombre (){
		return $this->nombre;
	}
	public function GetEdad (){
		return $this->edad;
	}
	public function GetTurno (){
		return $this->turno;
	}

	public function SetN ($nombre){
		$this->nombre=$nombre;
	}
	public function SetEdad ($edad){
		$this->edad=$edad;
	}
	public function SetTurno ($turno){
		$this->turno=$turno;
	}

	public function mostrar(){
		$l="<ul>
				<li><h3>Nombre: ".$this->nombre."</h3></li>
				<li>Edad: ".$this->edad."</li>
				<li>Turno:".$this->turno."</li>
			";
		return $l;
	}

}

 ?>