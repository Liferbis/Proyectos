<?php 
require_once "modelo.php";

if(empty($_GET)){
	require_once "vista.php";
}else if($_GET['pagina']=='inscripcion'){
	require_once "formulario.php";
	if(isset($_POST["enviar"])){
		$nombre=$_POST["nombre"];
		$numMatricula=$_POST["numMatricula"];
		$curso=$_POST["curso"];
		if(BD::insertAlumno($nombre,$numMatricula,$curso)){

		}
	}
	
}else if($_GET['pagina']=='mostrar'){	
	$alumnos=BD::CargaAlumnos();
	include_once "vistaMatri.php";
}
 ?>