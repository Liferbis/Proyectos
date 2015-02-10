<?php 
require_once "OperacionesConDNI.php";

$uri="http://127.0.0.1/wsdl";

$server = new SoapServer(null, array('uri'=>$uri));
$server->setClass('OperacionesConDNI');
$server->handle();

require_once "WSDLDocument.php";
$wsdl= new WSDLDocument("OperacionesConDNI");
file_put_contents('wsdl.xml', $wsdl->saveXML());

 ?>