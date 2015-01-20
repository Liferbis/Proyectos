 <?php 
 	require_once "vista_logeo.php";
	if(BD::verifica($nombre, $ctv)){
		$_SESSION['usuario'] = $nombre;
		header('Location: productos.php');
	}					
 	require_once "modelo.php";
 	BD::verifica($usu, $ctv);
 	$articulos=BD::cargaArticulos();

	
 	require_once "vista.php";
 	

  ?>