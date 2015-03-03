<?php 
require_once "Alumno.php";
class BD {
	const localhost="localhost";
	const usu="root";
	const ctv="";
	const bd="repaso";


	public static function conect(){
        $dwes = new mysqli(BD::localhost, BD::usu , BD::ctv, BD::bd);
		return $dwes;
	}

	public static function insertAlumno($nombre,$numMatricula,$curso){
		$dwes = BD::conect();

		$cons="INSERT INTO alumno (numMatricula, nombre, curso ) VALUES ('$numMatricula', '$nombre','$curso')";

		$resultado = $dwes->query($cons);
		if(!$resultado){
			$dwes->close();
			return false;
		}else{
			$dwes->close();
			return true;
		}
	}

	public static function CargaAlumno($numMatricula){
		$dwes = BD::conect();
		$c="SELECT * FROM alumno WHERE numMatricula='$numMatricula'";

		$resultado = $dwes->query($c);
				
		while($alumno=$resultado->fetch_object()){
			$alumnos = new Alumno( $alumno->numMatricula,
									$alumno->nombre,
									$alumno->curso 
										);	
		}
		$dwes->close();	
		return $alumnos;
	}

	public static function CargaAlumnos(){
		$dwes = BD::conect();
		$c="SELECT * FROM alumno ";

		$resultado = $dwes->query($c);
		
		$alumnos=array();
		
		while($alumno=$resultado->fetch_object()){
			$alumnos [] = new Alumno( $alumno->numMatricula,
										$alumno->nombre,
										$alumno->curso 
										);	
		}
		$dwes->close();	
		return $alumnos;
	}

}

?>
