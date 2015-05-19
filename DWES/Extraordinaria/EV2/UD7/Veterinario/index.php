<?php 

require_once "includes/BD.php";
require_once "includes/Perro.php";
require_once "includes/Gato.php";
require_once "includes/Cliente.php";


if (isset($_GET['vet'])) {
    $vet = $_GET['vet']; 
	if($_GET['vet']=="registro"){
		$clientes=BD::dameClientes();
		require_once "vistas/VistaRegistro.php";

	}else if($_GET['vet']=="listado"){
		$mascotas=BD::dameMascotas();
		require_once "vistas/VistaListado.php";
		
	}else if($_GET['vet']=="adultas"){
		$mascotas=BD::dameMascotas();
		require_once "vistas/VistaLisAdul.php";

	}else if($_GET['vet']=="clientes"){
		$clientes=BD::dameClientes();
		require_once "vistas/VistaListadoC.php";
	}
}else if(isset($_POST["regis"])){
	$nombre=$_POST["nombre"];
	$estado=BD::regMas($_POST["cliente"], $nombre, $_POST["raza"],$_POST["especie"], $_POST["fech"], $_POST["historial"]); 
	if($estado=="true"){
		require_once "vistas/VistaBien.php";
	}else{
		require_once "vistas/VistaMal.php";
	}
}else{
	require_once "vistas/VistaPrincipal.php";
}
 ?>