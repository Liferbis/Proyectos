<?php 

class Runner{
	/**
	 * dni
	 * @var string
	 */
	public $dni;

	/**
	 * nombre Y apallidos
	 * @var string
	 */
	public $nombre;

	/**
	 * sexo
	 * @var string
	 */
	public $sexo;

	/**
	 * talla de camiseta
	 * @var string
	 */
	public $talla;

	/**
	 * dorsal
	 * @var int
	 */
	public $dorsal;

	/**
	 * tiempo 
	 * @var int
	 */
	public $tiempo;

	/**
	 * __construct
	 * @param string $dni              
	 * @param string $nombre 
	 * @param string $sexo             
	 * @param string $talla    
	 * @param int $dorsal           
	 * @param int $tiempo           
	 */
	function __construct($dni, $nombre, $sexo, $talla, $dorsal, $tiempo){
		$this->dni=$dni;
		$this->nombre=$nombre;
		$this->sexo=$sexo;
		$this->talla=$talla;
		$this->dorsal=$dorsal;
		$this->tiempo=$tiempo;			
	}
	/**
	 * __set
	 * @param string $var   
	 * @param string $valor 
	 */
	public function __set($var, $valor) {
		if (property_exists(__CLASS__, $var)) {
			$this->$var = $valor;
		} else {
			echo "No existe $var.";
		}
	}

	/**
	 * __get
	 * @param  string $var 
	 * @return string 
	 */
	public function __get($var) {
		if (property_exists(__CLASS__, $var)) {
			return $this->$var;
		}
		return NULL;
	}

	/**
	 * mostrar
	 * @return string
	 */
	public function mostrar(){
		if($this->tiempo>0){
			$t=$this->tiempo/60;
		}else{
			$t=0;
		}
		$cadena="<li>Nombre: ".$this->nombre.
					"<ul>
						<li>Dni: ".$this->dni."</li>
						<li>Sexo: ".$this->sexo."</li>
						<li>Talla de Camiseta: ".$this->talla."</li>
						<li>Dorsal: ".$this->dorsal."</li>
						<li>Tiempo: ".$t."</li>
					</ul>
				</li>";
		return $cadena;
	}
}

?>