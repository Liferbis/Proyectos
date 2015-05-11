<?php 
	class coche {

		private $m;
		private $v;

		function __construct($m, $v){
			$this->m=$m;
			$this->v=$v;
		}

		function mostrar(){
			$l="Matricula: ".$this->m.
				"<br>".
				"Velocidad: ".$this->v;
			return $l;
		}

		function acelera($vel){
			if($this->v==120){
				return "El coche ya estaba a 120";
			}else {
				$this->v+=$vel;
				if($this->v >= 120){
					return "Coche esta a 120";
				}else{
					return $this->v;
				}
			}
		}

		function decelera($vel){
			if($this->v==0){
				return "El coche ya estaba parado";
			}else {
				$this->v-=$vel;
				if($this->v <= 0){
					return "Coche parado";
				}else{
					return $this->v;
				}
			}
		}
		
		public function __set($var, $valor) {
			if (property_exists(__CLASS__, $var)) {
				$this->$var = $valor;
			} else {
				echo "No existe el atributo $var.";
			}
		}

		public function __get($var) {
			if (property_exists(__CLASS__, $var)) {
				return $this->$var;
			}
			return NULL;
		}
	}

 ?>