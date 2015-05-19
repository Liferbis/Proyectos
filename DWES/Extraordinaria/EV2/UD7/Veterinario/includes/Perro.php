<?php 
require_once "Mascota.php";
require_once "ILadra.php";

class Perro extends Mascota implements ILadra{
	
	public function __construct($id, $idCliente, $nombre, $raza, $fech, $historial){
		parent::__construct($id, $idCliente, $nombre, $raza, $fech, $historial );
	}
	
	public function ladra(){
		echo "woof woof";
	}
}

 ?>