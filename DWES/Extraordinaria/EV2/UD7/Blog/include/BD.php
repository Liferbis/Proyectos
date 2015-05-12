<?php 

require_once "clases.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="blog";

	public static function conect(){
		$dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		$dwes->set_charset("utf8");
		return $dwes;
	}

	public static function verifica($usuario, $ctv){
		$dwes = BD::conect();

		$c="SELECT nombre, ctv FROM usuarios WHERE nombre='$usuario' AND ctv='$ctv'";

		$resultado = $dwes->query($c);

		$acceso=$resultado->fetch_object();

		if(!$acceso){
			return "false";
		}else{
			$dwes->close();
			return "true";
		}
	}

	public static function Tarticulos(){
		$dwes = BD::conect();

		$c="SELECT * FROM articulos";

		$resultado = $dwes->query($c);

		$artis=array();

		while($con=$resultado->fetch_object()){
			$artis[]= new Articulo ( $con->titulo,
									$con->descripcion,
									$con->fecha);
		}
		return $artis;
	}




}


 ?>