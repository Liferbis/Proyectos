<?php 
require_once "include/BD.php";

if(isset($_POST["confirm"])){
	$ctv=md5($_POST["ctv"]);
	$estado=BD::verifica($_POST["usu"], $ctv);
	if($estado=="true"){
		require_once "vistas/VistaArticulos.php";
	}else{
		require_once "vistas/VistaLogin.php";
	}
}else{
	require_once "vistas/VistaLogin.php";
}

 ?>