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

	public static function getTiem($dni){
		$dwes = BD::conect();
		$c="SELECT * FROM runners WHERE dni='$dni'";

		$resultado = $dwes->query($c);
		
		while($run=$resultado->fetch_object()){
			$runner = new Runner( $run->dni,
										$run->nombre,
										$run->sexo,
										$run->talla,
										$run->dorsal,
										$run->tiempo 
										);	
		}
		$dwes->close();	
		return $runner;
	}
	public static function getMejor(){
		$dwes = BD::conect();
		$c="SELECT * FROM runners ORDER BY tiempo DESC";

		$resultado = $dwes->query($c);
		
		$runners=array();

		$c=1;
		while($run=$resultado->fetch_object()){
			if($c<=3){
				$runners [] = new Runner( $run->dni,
										$run->nombre,
										$run->sexo,
										$run->talla,
										$run->dorsal,
										$run->tiempo 
										);	
				$c++;
			}
		}
		$dwes->close();	
		return $runners;
	}

}

?>