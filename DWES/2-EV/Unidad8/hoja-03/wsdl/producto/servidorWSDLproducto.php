<?php 
require_once "wsdlProducto.php";

$uri="http://127.0.0.1/wsdl";

$server = new SoapServer(null, array('uri'=>$uri));
$server->setClass('wsdlProducto');
$server->handle();

require_once "WSDLDocument.php";
$wsdl_usu= new WSDLDocument("wsdlProducto");
file_put_contents('wsdlProductos.xml', $wsdl_usu->saveXML());
 ?>