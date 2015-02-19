<?php 

require_once '../../../librerias/xajax-0.6/xajax_core/xajax.inc.php'; 

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="futbol";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public function getFutbolista($letra){
		$dwes = BD::conect();

		$cons="SELECT nombre FROM futbolistas WHERE nombre LIKE '%".$letra."%'";

		$resultado = $dwes->query($cons);

		$futbolistas = array();

		while( $futb = $resultado->fetch_object() ){
			$futbolistas [] = $futb->nombre;		
		}

		$dwes->close();	

		return $futbolistas;
	}
}

$xajax = new xajax();
//$xajax->configure("debug",true);

function listadoFutbolistas($letras){
	$respuesta= new xajaxResponse();

	$futbol=BD::getFutbolista($letras);
	$texto='<ul>';
	foreach ($futbol as $futbolista) {
		$texto.='<li>'.$futbolista.'</li>';
	}
	$texto.='</ul>';
	
	$respuesta->assign("listado","innerHTML",$texto);
	
	return $respuesta;
}

$xajax->register(XAJAX_FUNCTION,"listadoFutbolistas");
$xajax->configure('javascript URI','../../../librerias/xajax-0.6');
$xajax->processRequest();


?>