<?php 
require_once "class.empleados.php";

class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="vacaciones";

	public static function conect(){
		 $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function desconect(){
		$dwes = BD::conect();
		$dwes->close();
	}

//////////////////////   INSERT INTO   //////////////////////////////////////////////////////////////
	
	public static function registro($usuario,$ctv,$admin,$dni){

		$dwes = BD::conect();

		$cons="INSERT INTO usuarios (usuario, ctv,admin ) VALUES ('$usuario','$ctv','$admin')";

		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}

	public static function nuevoEmpleado($dni, $nombre, $apellido1, $apellido2,  $localidad, $becario, $movil, $comentarios){
		$dwes = BD::conect();
		$c="INSERT INTO empleados (dni, nombre, apellido1, apellido2,  localidad, movil, comentarios) VALUES ('$dni','$nombre', '$apellido1', '$apellido2',  '$localidad', '$becario', '$movil', '$comentarios')";
		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}
///////////////////////   BORRAR    //////////////////////////////////////////////////////////////

	public static function borraEmpleado($codigo){
		$dwes=BD::conect();
		$c="DELETE FROM empleados (WHERE codigo = '$codigo');";
		$resultado = $dwes->query($c);
		$dwes->close();
	}

//////////////////////    SELECT    //////////////////////////////////////////////////////////////

	public static function verifica($usuario, $ctv){
		$dwes = BD::conect();
		$c="SELECT nombre, ctv FROM usuarios WHERE usuario='$usuario' AND ctv='$ctv'";

		$resultado = $dwes->query($c);

		$acceso=$resultado->fetch_object();

		if(!$acceso){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}

	public static function CargaEmpleados(){
		$dwes = BD::conect();
		$c="SELECT * FROM empleados";

		$resultado = $dwes->query($c);
		
		$empleados=array();
		
		while($emple=$resultado->fetch_object()){
			$empleados [] = new Empleado( $emple->codigo,
											$emple->dni,
											$emple->nombre, 
											$emple->apellido1, 
											$emple->apellido2, 
											$emple->localidadDeTrabajo,
											$emple->movil,
											$emple->comentarios);	
		}
		$dwes->close();	
		return $empleados;
	}

	public static function DameEmpleado($codigo){
		
		$dwes = BD::conect();
		$c="SELECT * FROM empleados WHERE codigo='$codigo'";

		$resultado = $dwes->query($c);
		
		$empleado=array();
		
		while($emple=$resultado->fetch_object()){
			$empleado [] = new Empleado( $emple->codigo,
											$emple->dni,
											$emple->nombre, 
											$emple->apellido1, 
											$emple->apellido2, 
											$emple->localidadDeTrabajo,
											$emple->movil,
											$emple->comentarios);	
		}
		$dwes->close();	
		return $empleado;
	}

	public static function dni($dni){
		$dwes = BD::conect();
		$c="SELECT dni FROM usuarios WHERE dni=$dni";
		$resultado = $dwes->query($c);
		$acceso=$resultado->fetch_object();
		if(!$acceso){
			$dwes->close();	
			return false;
		}else{
			$dwes->close();	
			return true;
		}
	}
/////////////////////////////////////////////////////////////////////CREA CARPETAS





}
?>