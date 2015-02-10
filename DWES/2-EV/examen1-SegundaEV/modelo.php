<?php 
require_once "Class.Empleado.php";
require_once "Class.Futbolista.php";
require_once "Class.CuerpoTecnico.php";
require_once "Class.Entrenador.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="futbol";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function desconect(){
		$dwes = BD::conect();
		$dwes->close();
	}


	public function getFutbolista(){
		$dwes = BD::conect();

		$cons="SELECT * FROM futbolistas ";

		$resultado = $dwes->query($cons);

		$futbolistas=array();

		while($futb=$resultado->fetch_object()){

			$futbolistas [] = new Futbolista(
				$futb->dni,  
				$futb->nombre, 
				$futb->sueldo,
				$futb->dorsal, 
				$futb->goles);		
		}

		$dwes->close();	

		return $futbolistas;
	}

	public function getTecnicos(){
		$dwes = BD::conect();

		$cons="SELECT * FROM tecnicos";

		$resultado = $dwes->query($cons);

		$tecnicos=array();

		while($tecn=$resultado->fetch_object()){
			$tecnicos []  = new Entrenador( 
				$tecn->dni,
				$tecn->nombre,
			    $tecn->sueldo, 
			    $tecn->puesto,
			    $tecn->aniosEnClub);		
		}

		$dwes->close();	

		return $tecnicos;
	}

}
 ?>