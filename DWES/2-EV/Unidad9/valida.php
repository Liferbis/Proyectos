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
 ?>