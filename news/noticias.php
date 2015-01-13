<?php 

	class noticias{
		private $titulo;
		private $noticia;
		private $enlace;
		private $ruta;


		public function __construct($codigo, $titulo, $noticia, $enlace, $ruta){
			$this->titulo=$titulo;
			$this->noticia=$noticia;
			$this->enlace=$enlace;
			$this->ruta="img/".$codigo.".jpg";
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

		public static function copyRuta($enlace){
			$myRuta='C:\wamp\www\GitHub\Proyectos\news\img';
			if(!copy($enlace, $miruta)){
				return false;
			}else{
				return true;
			}
		}
	}

 ?>