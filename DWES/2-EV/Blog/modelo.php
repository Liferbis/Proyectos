<?php 
require_once "articulo.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="blog_db";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function desconect(){
		$dwes = BD::conect();
		$dwes->close();
	}

	public static function verifica($nombre, $ctv){
		$verifica=false;
		$dwes = BD::conect();
		$c="SELECT nombre, ctv FROM registro WHERE nombre='$nombre' AND ctv='$ctv'";

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

	public function cargaArticulos(){
		$dwes = BD::conect();

		$cons="SELECT * FROM articulos";

		$resultado = $dwes->query($cons);

		$articulo=array();

		while($arti=$resultado->fetch_object()){
			$articulo [] = new articulo( $arti->titulo, $arti->descripcion);		
		}

		$dwes->close();	

		return $articulo;
	}

	public function borraArticulo($codigo){
		$dwes = BD::conect();

		$cons="DELETE FROM articulos WHERE codigo='$codigo'";

		$resultado = $dwes->query($cons);
		
		$dwes->close();	
		return true;
	}

	public function getCodigo($titulo){
		$dwes = BD::conect();

		$cons="SELECT 'codigo' FROM articulos WHERE titulo='$titulo'";

		$resultado = $dwes->query($cons);
		while($arti=$resultado->fetch_object()){
			$resultado=$arti->codigo;
		}
		$dwes->close();	
		return $resultado;
	}




}
 ?>