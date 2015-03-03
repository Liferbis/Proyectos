<?php 
	$wsdl="http://localhost/Repositorio/Proyectos/DWES/2-EV/repasoExamen/wsdlAlumno.xml";

	$uri="http://127.0.0.1/wsdl";


try{
	$cliente=new SoapClient($wsdl,array('trace'=>1));
	$alumno=$cliente->AlumMatri(0001);
	echo "<ul>";
	echo "<li>Mostrar el <a target='_blank' href='wsdlAlumno.xml'> WSDL.xml</a></li>";
	echo "</ul>";

	echo "<br>El alumno con el numero de matricula 0001 es: ";
	echo "<ul>";
	echo "<li>Numero de Matricula: 0001 </li>";
	echo "<li>Nombre: ".$alumno->nombre."</li>";
	echo "<li>Curso: ".$alumno->curso."</li>";
	echo "</ul>";
	echo "<br> ";

}catch(SoapFault $e){
	print $e->getMessage();
}


 ?>