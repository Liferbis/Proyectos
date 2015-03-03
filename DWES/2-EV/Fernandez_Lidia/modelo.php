<?php 
require_once "Runner.php";
class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="mediamaraton";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function insertRunner($dni, $nombreYapallidos, $sexo, $tallaCamiseta, $dorsal, $tiempo){
		$dwes = BD::conect();

		$cons="INSERT INTO runners (dni, nombreYapallidos, sexo, tallaCamiseta ) VALUES ('$dni', '$nombreYapallidos', '$sexo', '$tallaCamiseta')";

		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}

	public static function simular(){
		$dwes = BD::conect();
		$c="UPDATE runners SET tiempo= FLOOR((RAND()*(9000-3600))+3600)";
		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}

	public static function CargaRunners(){
		$dwes = BD::conect();
		$c="SELECT * FROM runners ";

		$resultado = $dwes->query($c);
		
		$runners=array();
		
		while($run=$resultado->fetch_object()){
			$runners [] = new Runner( $run->dni,
										$run->nombreYapallidos,
										$run->sexo,
										$run->tallaCamiseta,
										$run->dorsal,
										$run->tiempo 
										);	
		}
		$dwes->close();	
		return $runners;
	}

	public static function getRunnersPorResultado($desde, $hasta){
		$dwes = BD::conect();
		$c="SELECT * FROM runners WHERE tiempo='$numMatricula'";

		$resultado = $dwes->query($c);
				
		while($alumno=$resultado->fetch_object()){
			$alumnos = new Alumno( $alumno->numMatricula,
									$alumno->nombre,
									$alumno->curso 
										);	
		}
		$dwes->close();	
		return $alumnos;
	}

	

}

?>