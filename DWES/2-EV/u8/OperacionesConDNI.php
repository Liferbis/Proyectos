<?php 
	class OperacionesConDNI{

		/**
		 * devuelve la letra del dni pasandole como parametro los numeros del dni
		 * @param  int
		 * @return string
		 */
		function calculaLetra($d){
			$letras=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
			$aux=$d%23;
			return $letras[$aux];
		}

		/**
		 * compruebaDNI
		 * @param  int
		 * @param  string
		 * @return boolean
		 */
		function compruebaDNI($d, $l){
			$letras=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
			$aux=$d%23;
			if($letras[$aux]==$l){
				return true;
			}else{
				return false;
			}
		}
	}

 ?>