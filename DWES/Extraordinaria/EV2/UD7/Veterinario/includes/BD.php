<?php 
require_once "Mascota.php";
require_once "Perro.php";
require_once "Gato.php";
require_once "Cliente.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="veterinario";

	public static function conect(){
		$dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		$dwes->set_charset("utf8");
		return $dwes;
	}

	public static function dameClientes(){
		$dwes=BD::conect();

		$c="SELECT * FROM clientes";

		$resultado=$dwes->query($c);
		$clientes=array();

		while($con=$resultado->fetch_object()){
			$clientes[]= new Cliente ( $con->id,
									$con->nombre,
									$con->num,
									$con->email);
		}
		$dwes->close();
		return $clientes;
	}

	public static function dameNombreC($codigo){
		$dwes=BD::conect();
		$c="SELECT nombre FROM clientes WHERE id='$codigo'";
		$resultado=$dwes->query($c);
		$c=$resultado->fetch_array();
		$nombre=$c["nombre"];	
		$dwes->close();	
		return $nombre;
	}

	public static function dameMascotas(){
		$dwes=BD::conect();

		$c="SELECT * FROM mascotas";

		$resultado=$dwes->query($c);
		$mascotas=array();
		while($con=$resultado->fetch_object()){
			if ($con->especie=="Perro"){
				$mascotas[]= new Perro ( $con->id,
									$con->idCliente,
									$con->nombre,
									$con->raza,
									$con->fech,
									$con->historial);
			}else{
				$mascotas[]= new Gato ( $con->id,
									$con->idCliente,
									$con->nombre,
									$con->raza,
									$con->fech,
									$con->historial);
			}
		}
		$dwes->close();
		return $mascotas;
	}

	public static function regMas($idCliente, $nombre, $raza,$especie, $fech, $historial){
		$dwes=BD::conect();

		$cons="INSERT INTO mascotas (id, idCliente, nombre, especie, raza, fech, historial) VALUES (NULL, '$idCliente', '$nombre',  '$especie', '$raza', '$fech', '$historial');";

		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return "false";
		}else{
			$dwes->close();
			return "true";
		}
		$dwes->close();
		return "true";
	}



}


 ?>