<?php 
require_once 'lib-xajaxCHECq.php'; 
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
		<form name="formulario">
			<input type="checkbox" name="si" value="1" onclick="xajax_metodo(document.formulario.si.checked)">
			Chequeanteee!!
			<div id="mensaje"></div>
		</form>
	</div>
</body>
</html>