<?php 
require_once "wsdlRunners.php";

$uri="http://127.0.0.1/wsdl";

$server = new SoapServer(null, array('uri'=>$uri));
$server->setClass('MediaMaratonWebService');
$server->handle();

require_once "WSDLDocument.php";
$wsdl_usu= new WSDLDocument("MediaMaratonWebService");
file_put_contents('MediaMaratonWebService.xml', $wsdl_usu->saveXML());
 ?>