<?php 
require_once "wsdlUsuario.php";

$uri="http://127.0.0.1/wsdl";

$server = new SoapServer(null, array('uri'=>$uri));
$server->setClass('wsdlUsuario');
$server->handle();

require_once "WSDLDocument.php";
$wsdl_usuario= new WSDLDocument("wsdlUsuario");
file_put_contents('wsdlUsuarios.xml', $wsdl_usuario->saveXML());
 ?>