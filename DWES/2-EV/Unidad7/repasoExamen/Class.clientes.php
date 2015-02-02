<?php 
class Cliente{
	protected $id;
	protected $nombre;
	protected $telefono;
	protected $email;


	function __construct($id, $nombre, $telefono, $email){
		$this->id=$id;
		$this->nombre=$nombre;
		$this->telefono=$telefono;
		$this->email=$email;
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