<?php 
require_once "Class.clientes.php";
require_once "Class.Mascota.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="veterinario";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function desconect(){
		$dwes = BD::conect();
		$dwes->close();
	}


	public function cargaMascotas(){
		$dwes = BD::conect();

		$cons="SELECT * FROM mascotas";

		$resultado = $dwes->query($cons);

		$mascotass=array();

		while($masc=$resultado->fetch_object()){
			$mascotass [] = new Mascota(
				$masc->id, 
				$masc->idCliente, 
				$masc->nombre, 
				$masc->especie, 
				$masc->raza, 
				$masc->fechaNacimiento, 
				$masc->historial);		
		}

		$dwes->close();	

		return $mascotass;
	}

	public function registraC($nombre, $telefono, $email){
		$dwes = BD::conect();

		$cons="INSERT INTO clientes (nombre, telefono, email) VALUES ('$nombre', '$telefono', '$email')";

		$resultado = $dwes->query($cons);

		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}

	// public function registraM($idcliente, $nombre, $especie, $raza, $fechaNacimiento, $historial){

	// 	$dwes = BD::conect();

	// 	$cons="INSERT INTO mascotas (idcliente, nombre, especie, raza, fechaNacimiento, historial) VALUES ('$idcliente','$nombre', '$especie' ,'$raza', '$fechaNacimiento', '$historial')";

	// 	$resultado = $dwes->query($cons);
		
	// 	if(!$resultado){
	// 		$dwes->close();
	// 		return false;
	// 	}else{
	// 		$dwes->close();
	// 		return true;
	// 	}
	// }

	public function registraP($idcliente, $nombre, $raza, $fechaNacimiento, $historial){

		$dwes = BD::conect();

		$cons="INSERT INTO mascotas (idcliente, nombre, especie, raza, fechaNacimiento, historial) VALUES ('$idcliente','$nombre', 'perro' ,'$raza', '$fechaNacimiento', '$historial')";

		$resultado = $dwes->query($cons);
		
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}

	public function registraG($idcliente, $nombre, $raza, $fechaNacimiento, $historial){

		$dwes = BD::conect();

		$cons="INSERT INTO mascotas (idcliente, nombre, especie, raza, fechaNacimiento, historial) VALUES ('$idcliente','$nombre', 'gato' ,'$raza', '$fechaNacimiento', '$historial')";

		$resultado = $dwes->query($cons);
		
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}

	public function cargaClientes(){
		$dwes = BD::conect();

		$cons="SELECT * FROM clientes";

		$resultado = $dwes->query($cons);

		$cliente=array();

		while($client=$resultado->fetch_object()){
			$cliente []  = new Cliente( 
				$client->id,
				$client->nombre,
			    $client->telefono, 
			    $client->email);		
		}

		$dwes->close();	

		return $cliente;
	}

	public function borraMascota($codigo){
		$dwes = BD::conect();

		$cons="DELETE FROM mascotas WHERE codigo='$codigo'";

		$resultado = $dwes->query($cons);
		
		$dwes->close();	
		return true;
	}

	public function getCodigo($nombre, $telefono){
		$dwes = BD::conect();

		$cons="SELECT 'id' FROM mascotas, clientes WHERE clientes.nombre='$nombre' AND clientes.telefono='$telefono'";

		$resultado = $dwes->query($cons);
		while($cod=$resultado->fetch_object()){
			$resultado=$cod->codigo;
		}
		$dwes->close();	
		return $resultado;
	}




}
 ?>