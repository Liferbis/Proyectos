<?php 
	$wsdl="http://localhost/Repositorio/Proyectos/DWES/2-EV/u8/wsdl.xml";
	$uri="http://127.0.0.1/wsdl";



try{
	$cliente=new SoapClient($wsdl,array('trace'=>1));
	
	$dni=$cliente->calculaLetra(72150688);
	$comp=$cliente->compruebaDNI(72150688,'X');

}catch(SoapFault $e){
	print $e->getMessage();
}

print "Letra del dni: 72150688 = ".$dni;
if(!$comp){
	print "<br>El dni introducido es erroneo";
}else{
	print "<br>El dni introducido es correcto";
}
 ?>