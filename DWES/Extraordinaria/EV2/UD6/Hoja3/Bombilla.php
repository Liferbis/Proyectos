<?php 
require_once "Encendible.php";
	
	class Bombilla implements encendible{
		private $horas;
		private $estado;

		public function __construct($horas){
			$this->horas=$horas;
			$this->estado="apagado";
		}

		public function encender(){
			if($this->estado=="encendido"){
				echo "La bombilla YA ESTABA encendida<br>";
			}else if($this->horas<=0 ){
				echo "La bombilla no tiene horas de vida";
			}else{
				$this->horas-=2;
				$this->estado="encendido";
				echo "La bombilla se acaba de encender";
			}
		}

		public function apagar(){
			if($this->estado=="apagado"){
				echo "La bombilla YA ESTABA apagada";
			}else {
				$this->estado="apagado";
				echo "La bombilla se acaba de apagar!!!";
			}
		}
	}
 ?>