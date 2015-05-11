<?php 


////// BASE DE DATOS /////

class BD{
	const usu="root";
	const ctv="";


	public static function conect(){
	 	$dwes = new PDO('mysql:host=localhost;dbname=agencia' , BD::usu , BD::ctv);
	 	$dwes->exec("set names utf8");
	 	return $dwes;
	}

	public static function comprobar($id_cliente, $ctv){
		$dwes = BD::conect();

		$c="SELECT * FROM clientes WHERE id_cliente='$id_cliente' AND password='$ctv'";

		$resultado = $dwes->query($c);	
		$acceso= $resultado->fetch();

		if(!$acceso){
			unset($dwes);
			return "false";
		}else{
			unset($dwes);
			return "true";
		}
	}

	public static function nombreClient($id_cliente){
		$dwes=BD::conect();

		$c="SELECT nombre FROM clientes WHERE id_cliente='$id_cliente'";
		
		$resultado = $dwes->query($c);	
	
		while($num=$resultado->fetch()){
			$n=$num['nombre'];
		}
		unset($dwes);
		return $n;
	}

	public static function CargaViajes(){
		$dwes= new mysqli('localhost','root','','agencia');
		$dwes->set_charset("utf8");

		$consulta=$dwes->stmt_init();
		$consulta->prepare("SELECT nombre, precio FROM viajes ORDER BY precio ASC");
		$consulta->execute();
		$consulta->bind_result($nombre, $precio);
		$n=array();

		while( $consulta->fetch() ){
			$n[]=array($nombre, 
						$precio);
		}

		$consulta->close();
		$dwes->close();
		return $n;
	}

	public static function numV($nombre){
		$dwes=BD::conect();

		$c="SELECT id_viaje FROM viajes WHERE nombre='$nombre'";
		
		$resultado = $dwes->query($c);	
	
		while($num=$resultado->fetch()){
			$n=$num['id_viaje'];
		}
		unset($dwes);
		return $n;
	}

	public static function precioV($id){
		$dwes=BD::conect();

		$c="SELECT precio FROM viajes WHERE id_viaje='$id'";
		
		$resultado = $dwes->query($c);	
	
		while($num=$resultado->fetch()){
			$n=$num['precio'];
		}
		unset($dwes);
		return $n;
	}

	public static function nomViaje($id){
		$dwes=BD::conect();

		$c="SELECT nombre FROM viajes WHERE id_viaje='$id'";
		
		$resultado = $dwes->query($c);	
	
		while($num=$resultado->fetch()){
			$n=$num['nombre'];
		}
		unset($dwes);
		return $n;
	}

	public static function reserva($nombre, $personas, $id){
		$dwes = BD::conect();

		$codViaje = BD::numV($nombre);
		

		$dwes->beginTransaction();

		$c="INSERT INTO reservas (id_cliente, id_viaje, numero_personas) VALUES ('$id', '$codViaje', '$personas')";
		
		$res = $dwes->exec($c);

		if($dwes->commit()){
			unset($dwes);
			return "true";
		}else{
			$dwes->rollback();
 			unset($dwes);
 			return "false";
	 	}
	}

	public static function verReservas(){
		$dwes=BD::conect();

		$c="SELECT * FROM reservas";
		
		$resultado = $dwes->query($c);	
		
		$n=array();

		while($num=$resultado->fetch()){
			$n[]=array($num["id_cliente"], 
						$num["id_viaje"],
						$num["numero_personas"]);
		}
		unset($dwes);
		return $n;
	}





}

 ?>