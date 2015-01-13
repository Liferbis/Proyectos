<?php 
	include_once "noticias.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="noticias";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function desconect(){
		$dwes = BD::conect();
		$dwes->close();
	}

	public function cargaNoticias(){
		$dwes = BD::conect();

		$cons="SELECT * FROM notice";

		$resultado = $dwes->query($cons);
		
			$noticia=array();
			while($prod=$resultado->fetch_object()){
				$noticia [] = new noticias($prod->codigo, $prod->titulo, $prod->noticia, $prod->enlace, $prod->ruta);		
			}
			$dwes->close();	
			return $noticia;
	}

	public static function nueva($titulo, $mensaje, $enlace, $ruta){

		$dwes = BD::conect();

		if(noticias::copyRuta($ruta)){
			$cons="INSERT INTO notice (codigo, titulo, argumento, enlace, ruta) VALUES ('null','$titulo', '$mensaje', '$enlace','$ruta')";
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
			return false;
		}
	}

	

}
 ?>