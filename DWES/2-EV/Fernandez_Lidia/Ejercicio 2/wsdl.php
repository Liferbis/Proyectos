<?php
require_once "wsdlRunners.php";
require_once "WSDLDocument.php";
$class="MediaMaratonWebService";
$url="http://localhost/Proyectos/DWES/2-EV/Fernandez_Lidia/Ejercicio%202/wsdlRunners.php";
$uri="http://127.0.0.1/wsdl";
$wsdl_usu= new WSDLDocument($class, $url, $uri);
header('Content-Type:text/xml');
echo $wsdl->saveXML();
//file_put_contents('MediaMaratonWebService.xml', $wsdl_usu->saveXML());

?>