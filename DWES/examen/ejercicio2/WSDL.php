<?php

include_once('MediaMaratonWebService.php');
//include_once('C:\wamp\www\LIBS\WSDLDocument\src\WSDLDocument.php');
include_once('../../lib/WSDLDocument/src/WSDLDocument.php');

$class = "MediaMaratonWebService";

/* WSDLDocument(clase, url servicio, uri) */
$wsdl = new WSDLDocument($class, "http://127.0.0.1/Examen/evaluacion2final/correccion_casa/ejercicio2/MediaMaratonServicio.php", "http://127.0.0.1/examen");
header('Content-Type:text/xml');
echo $wsdl->saveXML();
?>