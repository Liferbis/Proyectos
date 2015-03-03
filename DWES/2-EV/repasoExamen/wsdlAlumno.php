<?php 
require_once "modelo.php";

class wsdlAlumno{

	/**
	 * devuelve un array con el alumno con el num de la matricula
	 * @param int $num numeroMatricula
	 * @return Alumno
	 */
	public function AlumMatri($num){
		$alumno=BD::CargaAlumno($num);
		return $alumno;
	}
	
}

 ?>