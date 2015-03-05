<?php 
require_once "wsdlRunners.php";

$uri="http://127.0.0.1/wsdl";

$server = new SoapServer(null, array('uri'=>$uri));
$server->setClass('MediaMaratonWebService');
$server->handle();

?>