<?php 
	function calculaLetra($d){
		$letras=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
		$aux=$d%23;
		return $letras[$aux];
	}

	function compruebaDNI($d, $l){
		$letras=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
		$aux=$d%23;
		if($l==$letras[$aux]){
			return true;
		}else{
			return false;
		}
	}

	$server = new SoapServer(null, array('uri'=>''));
	$server->setFunction('calculaLetra');
	$server->setFunction('compruebaDNI');
	$server->handle();
			
 ?>

