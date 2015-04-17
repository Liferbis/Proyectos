<?php 

//////////////////////////////////////////////////////////////
//////////// Esta es la clase funciones //////////////////////
//////////////////////////////////////////////////////////////
//////////// aqui se encuentran todos los metodos  ///////////
//////////// que NO hacen referencia a la base de datos //////
//////////// todas las funciones que necesitamos /////////////
///*******///se aconseja que si no sabes no toques ///****////
//////////////////////////////////////////////////////////////
class funcion {

	public static function dias($fechaI, $fechaF){

		$festivos=BD::damefestivosfechas();

		foreach ($festivos as $fes) {
			
		}

		$dias=(strtotime($fechaF)-strtotime($fechaI))/86400;
		$i=$dias;
		echo "Fecha Inicio: ".$fechaI;
		$fechaI = new DateTime($fechaI);
		for ($j=1; $j <= $i ; $j++) { 

			$intervalo = new DateInterval('P1D');

			$fechaI->add($intervalo);
			if($fechaI->format('Y-m-d') == $fechaF){
				echo "<br>Fecha FIN: ".$fechaF;
			}else{
				echo "<br>Fecha Inicio + ".$j." : ";
				echo $fechaI->format('Y-m-d');
			}

		}
	}


}
?>