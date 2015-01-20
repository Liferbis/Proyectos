<?php 
	class articulo{
		protected $titulo;
		protected $date;
		protected $descripcion;
		protected $codigo;
		
		function __construct($titulo, $descripcion){
		    self::$codigo++;
		    $this->titulo=$titulo;
			$this->date=date('D'-'d'-'n'-'Y');
			$this->descripcion=$descripcion;
			
		}

		
	}
 ?>