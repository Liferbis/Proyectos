<?php 
require_once "../../../librerias/xajax-0.6/xajax_core/xajax.inc.php"; 

$xajax = new xajax();
//$xajax->configure("debug",true);

function validarNombre($nombre){
	if(strlen($nombre)>3){
		return true;
	}else{
		return false;
	}
}

function validarDNI($dni){
	if(strlen($dni)==9){
		$letras=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
		$d=substr($dni, 0, 8);
		$aux=$d%23;
		if($letras[$aux]==$dni[8]){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

function validarPasswords($password1, $password2){ 
	if($password1==$password2){
		if(strlen($password1)>5){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

function validarFormulario($valores){
	$respuesta = new xajaxResponse();
	$error=false;

	if(!validarNombre($valores['nombre'] )){
		$respuesta->assign("errorNombre","innerHTML","Nombre <strong>INCORRECTO</strong>");
		$error=true;
	}else{
		$respuesta->clear("errorNombre","innerHTML");
	}

	if(!validarDNI($valores['DNI'] ) ){
		$respuesta->assign("errorDNI","innerHTML","DNI <strong>INCORRECTO</strong>");
		$error=true;
	}else{
		$respuesta->clear("errorDNI","innerHTML");
	}
	if(!validarPasswords($valores['password1'], $valores['password2'] ) ){
		$respuesta->assign("errorPassword","innerHTML","Password <strong>INCORRECTA</strong>");
		$error=true;
	}else{
		$respuesta->clear("errorPassword","innerHTML");
	}
	if(!$error){
		$respuesta->assign("mensaje","innerHTML","Formulario <strong>CORRECTO</strong>");
	}

	return $respuesta;
}

$xajax->register(XAJAX_FUNCTION,"validarFormulario");

$xajax->configure('javascript URI','../../../librerias/xajax-0.6');

$xajax->processRequest();

?>