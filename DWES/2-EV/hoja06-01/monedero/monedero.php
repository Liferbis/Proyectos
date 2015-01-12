<?php 
	class monedero{

		private $dinero;
		private static $n_monederos=0;
		
		public function __construct($dinero){
			$this->dinero=$dinero;
			self::$n_monederos++;
		}


		public function gasta($dinero){
			
			if($this->dinero>=$dinero){
				$this->dinero-=$dinero;
				return $this->dinero; 
			}else{
				return "----Imposible!!"; 
			}
		}

		public function __destruct(){
			self::$n_monederos--;
		}

		public function saldo(){
			return $this->dinero;
		}

		public function monederos(){
			return self::$n_monederos;
		}
	}

 ?>