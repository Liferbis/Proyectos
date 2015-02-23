<?php 
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
	$respuesta=array();

	if(!validarNombre($valores['nombre'] )){
		$respuesta['errorNombre'] = utf8_encode("El nombre debe tener más de 3 caracteres.");
	}

	if(!validarDNI($valores['DNI'] ) ){
		$respuesta['errorDNI'] = utf8_encode("El DNI es incorrecto");
	}
	if(!validarPasswords($valores['password1'], $valores['password2'] ) ){
		$respuesta['errorPassword']= utf8_encode("El pasword es incorrecto");
	}
	return $respuesta;
}
echo json_encode(validarFormulario($_REQUEST));
?>