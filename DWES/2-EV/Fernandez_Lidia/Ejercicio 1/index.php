<?php 
require_once "modelo.php";

if(empty($_GET)){
	require_once "vistaPrincipal.php";

}else if($_GET['pagina']=='inscripcion'){
	require_once "vistaInscripcion.php";
	if(isset($_POST["enviar"])){
		// $nombre=$_POST["nombre"];
		// $numMatricula=$_POST["numMatricula"];
		// $curso=$_POST["curso"];
		if(BD::insertRunner($_POST)){
			require_once "vistaPrincipal.php";
		}
	 }
	//else{
	// 	require_once "vistaInscripcion.php";
	// }
	
}else if($_GET['pagina']=='simularCarrera'){	
	if($alumnos=BD::simular()){
		require_once "vistaPrincipal.php";
	}

} else if($_GET['pagina']=='resultados'){
	require_once "vistaRsultados.php";
}


?>