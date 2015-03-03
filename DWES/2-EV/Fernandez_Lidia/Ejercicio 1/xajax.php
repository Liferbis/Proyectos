<?php 
require_once "librerias/xajax/xajax-0.6/xajax_core/xajax.inc.php";

$xajax = new xajax();
//$xajax->configure("debug",true);

function pulsaBoton(){
	$respuesta = new xajaxResponse();

	
		$respuesta->assign("mensaje","innerHTML","BOTON1");
		
	 if($valores=='2'){
		$respuesta->assign("mensaje","innerHTML", "boton2");
	}

	return $respuesta;
}

$xajax->register(XAJAX_FUNCTION,"pulsaBoton");

$xajax->configure('javascript URI','librerias/xajax/xajax-0.6');

$xajax->processRequest();

?>