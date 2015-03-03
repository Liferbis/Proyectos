<?php 
require_once "wsdlAlumno.php";

$uri="http://127.0.0.1/wsdl";

$server = new SoapServer(null, array('uri'=>$uri));
$server->setClass('wsdlAlumno');
$server->handle();

require_once "WSDLDocument.php";
$wsdl_usu= new WSDLDocument("wsdlAlumno");
file_put_contents('wsdlAlumno.xml', $wsdl_usu->saveXML());
 ?>