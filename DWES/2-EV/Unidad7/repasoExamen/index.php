<?php
require_once "modelo.php" ;
if(empty($_GET)){
	require_once "vista.php";
}
if(isset($_GET['vista-registro-c'])){
	require_once "vistaRegistroC.php" ;
	if (isset($_POST["envio"])){
		if($_POST["envio"]==1){
			if( isset($_POST["nombre"]) 
				&& isset($_POST["tel"]) 
				&& isset($_POST["mail"]) ){

				$nombre= $_POST["nombre"];
				$telefono= $_POST["telefono"];
				$email= $_POST["email"];
				if(BD::registraC($nombre, $telefono, $email)){
					require_once "vista.php";
					echo "Registro correcto";
				}
			}else{
				require_once "vista.php";
				echo "ERROR";
			}
		}else{
			require_once "vista.php";
		}
	}
}
if(isset($_GET['vista-registro-m'])){
	require_once "vistaRegistroM.php" ;
	if (isset($_POST["envio"])){
		if($_POST["envio"]==1){
			$clientess=BD::cargaClientes();
			if( isset($_POST["idcliente"])
				&& isset($_POST["nombre"])
				&& isset($_POST["especie"]) 
				&& isset($_POST["raza"]) 
				&& isset($_POST["fechaNacimiento"])
				&& isset($_POST["historial"]) ){

				$cliente=$_POST["idcliente"];
				$nombre= $_POST["nombre"];
				$especie= $_POST["especie"];
				$raza= $_POST["raza"];
				$fechaNacimiento= $_POST["fechaNacimiento"];
				$historial= $_POST["historial"];
				if(BD::registraM($idcliente,$nombre, $raza, $fechaNacimiento, $historial)){
					require_once "vista.php";
					echo "Registro correcto";
				}
			}else{
				require_once "vista.php";
				echo "ERROR";
			}
		}else{
			require_once "vista.php";
		}
	}
}
if(isset($_GET['vista-clientes'])){
	$clientess=BD::cargaClientes();
	require_once "vistaClientes.php" ;
	
}
if(isset($_GET['vista-mascotas'])){
	$mascotass=BD::cargaMascotas();
	require_once "vistaMascotas.php" ;
	
}



?>