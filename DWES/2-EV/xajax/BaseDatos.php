<?php 
require_once '../../../librerias/xajax-0.6/xajax_core/xajax.inc.php'; 

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="tienda";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function verifica($nombre, $ctv){
		$dwes = BD::conect();
		$c="SELECT nombre, ctv FROM registro WHERE nombre='$nombre' AND ctv='$ctv'";

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
}




$xajax = new xajax();
//$xajax->configure("debug",true);

function metodo($valores){
	$respuesta= new xajaxResponse();
	$ctv=md5($valores["password"]);
	if(BD::verifica($valores["nombre"], $ctv)){
		$respuesta->assign("mensaje","innerHTML","<strong>Correcto</strong>estas registrado");
	}else{
		$respuesta->assign("mensaje","innerHTML","<strong>Incorrecto NO </strong>estas registrado");
	}
	return $respuesta;
}

$xajax->register(XAJAX_FUNCTION,"metodo");
$xajax->configure('javascript URI','../../../librerias/xajax-0.6');
$xajax->processRequest();

?>
