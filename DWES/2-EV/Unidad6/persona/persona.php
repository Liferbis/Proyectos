<?php 

	class Persona{
		public $nombre;
		public $edad;
		private static $n_p=0;

		public function __construct($nombre, $edad){
			$this->nombre=$nombre;
			$this->edad=$edad;
			self::$n_p++;
		}

		public function mostrar(){
			echo "Nombre: ".$this->nombre."<br>Edad: ".$this->edad;
		}

		public function per(){
			echo self::$n_p;
		}
	}

 ?>