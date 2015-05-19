<?php 
require_once "Mascota.php";
require_once "IMaulla.php";

class Gato extends Mascota implements IMaulla{
	
	public function __construct($id, $idCliente, $nombre, $raza, $fech, $historial){
		parent::__construct($id, $idCliente, $nombre, $raza, $fech, $historial );
	}
	
	public function maulla(){
		echo "miau miau";
	}
}

 ?>