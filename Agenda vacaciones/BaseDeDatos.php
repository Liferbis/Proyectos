<?php 
require_once "empleados.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="vacaciones";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function desconect(){
		$dwes = BD::conect();
		$dwes->close();
	}

	public static function verifica($usuario, $ctv){
		$verifica=false;
		$dwes = BD::conect();
		$c="SELECT nombre, ctv FROM usuarios WHERE usuario='$usuario' AND ctv='$ctv'";

		$resultado = $dwes->query($c);

		$acceso=$resultado->fetch_object();

		if(!$acceso){
			$verifica=false;
		}else{
			$verifica=true;
		}
		$dwes->close();
		return $verifica;
	}

	public static function registro($usuario,$ctv,$admin,$dni){

		$dwes = BD::conect();

		$cons="INSERT INTO usuarios (usuario, ctv,admin ) VALUES ('$usuario','$ctv','$admin')";

		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}
	public static function dni($dni){
		$dwes = BD::conect();
		$c="SELECT dni FROM usuarios WHERE dni=$dni";
		$resultado = $dwes->query($c);
		$acceso=$resultado->fetch_object();
		if(!$acceso){
			$dwes->close();	
			return false;
		}else{
			$dwes->close();	
			return true;
		}
	}
	public static function modifica($nombre, $dni, $ctv){
		$dwes = BD::conect();
		if(BD::dni($dni)){
			$cons="UPDATE usuarios SET ctv=$ctv WHERE dni=$dni";
			$resultado = $dwes->query($cons);
			if(!$resultado){
				$dwes->close();
				return false;
			}else{
				$dwes->close();
				return true;
			}
		}else{
			$dwes->close();
			return true;
		}
	}




}
?>