<?php 
require_once "encendible.php";

	class Coche implements encendible{
		private $gasolina;
		private $bateria;
		private $estado;

		public function __construct(){
			$this->gasolina=0;
			$this->bateria=10;
			$this->estado="apagado";
		}

		public function encender(){
			if($this->gasolina==0){
				echo "El coche no tiene gasolina!";
			}else if($this->bateria==0){
				echo "El coche no tiene bateria!";
			}else if($this->estado=="encendido"){
				echo "El coche YA ESTABA encendido!";
			}else{
				$this->gasolina-=1;
				$this->bateria-=1;
				$this->estado="encendido";
				echo "¡¡¡El coche se acaba de encender!!!";
			}
		}

		public function apagar(){
			if($this->estado=="apagado"){
				echo "El coche YA ESTABA apagado";
			}else {
				echo "El coche se acaba de apagar";
			}
		}

		public function repostar($litros){
			$this->gasolina+=$litros;
			$this->bateria=10;
		}


	}

 ?>