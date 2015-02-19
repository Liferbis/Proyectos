<?php 
require_once '../../../librerias/xajax-0.6/xajax_core/xajax.inc.php'; 

$xajax = new xajax();
$xajax->configure("debug",true);
$xajax->register(XAJAX_FUNCTION,"ejemplo");
$xajax->configure('javascript URI','../../../librerias/xajax-0.6');
$xajax->processRequest();

function ejemplo(){
	$respuesta= new xajaxResponse();
	$respuesta->assign("mensaje","innerHTML","Esto es una respuesta XAJAX <strong>desde PHP</strong>");
	return $respuesta;
}

?>
<html>
<head>
	<?php 
		$xajax->printJavascript();

	 ?>
	<title>XAJAX</title>
</head>
<body>
	<div id="contenedor">
		<div id="mensaje"></div>
		<button type="button" onclick="xajax_ejemplo()">Ver mensaje</button>
	</div>
</body>
</html>