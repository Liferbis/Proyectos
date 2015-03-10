<?php

include_once('MediaMaratonWebService.php');

$uri = "http://127.0.0.1/examen";

$server = new SoapServer(null, array('uri' => $uri));
/* en lugar de aNadir una a una las funciones al servidor se aNade la clase completa */
$server->setClass('MediaMaratonWebService');
$server->handle();
?>