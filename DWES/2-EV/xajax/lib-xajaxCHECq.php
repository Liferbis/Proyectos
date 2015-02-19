<?php 
require_once '../../../librerias/xajax-0.6/xajax_core/xajax.inc.php'; 

$xajax = new xajax();
//$xajax->configure("debug",true);
$xajax->register(XAJAX_FUNCTION,"metodo");
$xajax->configure('javascript URI','../../../librerias/xajax-0.6');
$xajax->processRequest();

function metodo($entrada){
	$respuesta= new xajaxResponse();
	if($entrada==true){
		$respuesta->assign("mensaje","innerHTML","<strong>SI </strong>esta marcado");
	}else{
		$respuesta->assign("mensaje","innerHTML","<strong>NO </strong>esta marcado");
	}
	return $respuesta;
}

?>