<?php 
require_once "modelo.php";

class MediaMaratonWebService {

	/**
	 * devuelve solo un corredor con el dni introducido
	 * @param  string $dni 
	 * @return Runner
	 */
	public function getTiempo($dni){
		$runer=BD::getTiem($dni);
		return $runer;
	}

	/**
	 * los 3 mejores tiempos
	 * @return Runner[]
	 */
	public function getMejor(){
		$runer=BD::getMejor();
		return $runer;
	}
}