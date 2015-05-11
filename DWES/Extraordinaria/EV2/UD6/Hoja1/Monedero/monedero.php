<?php 
	/**
	* 
	*/
	class monedero	{

		private $dinero;
		private static $n_monederos=0;
		
		public function __construct($dinero){
			$this->dinero=$dinero;
			self::$n_monederos++;
		}

		public function MeteDi($mon){
			$this->dinero+=$mon;
		}

		public function SacaDi($mon){
			if ($this->dinero < $mon) {
				return "No tienes suficiente saldo";
			}else{
				$this->dinero-=$mon;
			}
		}

		public function mostrar(){
			$l="Dispones de: ".$this->dinero." €";
			return $l;
		}

		public function __destruct(){
			self::$n_monederos--;
		}

		public function monederos(){
			$l="Dispones de: ".self::$n_monederos." Monederos";
			return $l;
		}
	}

 ?>