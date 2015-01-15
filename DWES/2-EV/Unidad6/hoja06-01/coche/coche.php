<?php 

	class coche	{
		private $matricula;
		private $velocidad;

		public function __construct($matricula, $velocidad){
			$this->matricula=$matricula;
			$this->velocidad=$velocidad;
		}
		
		public function acelera($velocidad){
			$v=$this->velocidad+$velocidad;
			if($v>120){
				return "No puedes acelerar tanto";
			}else{
				$this->velocidad=$v;
				return "tu velocidad ahora es $v";
			}
		}

		public function decelera($velocidad){
			$v=$this->velocidad-$velocidad;
			if($v<0){
				return "No puedes decelerar tanto";
			}else{
				$this->velocidad=$v;
				return "tu velocidad ahora es $v";
			}
		}

		public function mostrar(){
			return "Velocidad = ".$this->velocidad."km/h Matrucila : ".$this->matricula;
		}
	}
 ?>