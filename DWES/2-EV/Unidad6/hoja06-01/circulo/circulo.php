<?php 

class circulo {
	private $radio;

	public function __construct($radio)	{
		$this->radio=$radio;	
	}

/*
	public function setRadio($radio) {
		$this->radio=$radio;
	}

	public function getRadio(){
		return $this->radio;
	}
*/

	public function __set($radio, $valor) {
		if (property_exists(__CLASS__, $valor)) {
			$this->radio=$radio;
			return $this->radio;
		}else{
			return false;
		}
	}

	public function __get($radio){
		if (property_exists(__CLASS__, $radio)) {
			return $this->radio;
		}else{
			return false;
		}
	}
}
?>