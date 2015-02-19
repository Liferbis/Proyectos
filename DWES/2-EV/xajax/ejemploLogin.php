<?php 
require_once "BaseDatos.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>XAJAX</title>
	<?php 
		$xajax->printJavascript();
	 ?>
	 <script type="text/javascript" src="validarLogin.js"></script>

</head>
<body>
	<h1>LOGEATE</h1>
		<form id="datos" action="javascript:void(null);" onsubmit="enviarFormulario();">
			<div class="campo">
				<label>Nombre</label>
				<input type="text" name="nombre" >
			</div>			
			<div class="campo">
				<label>Contraseña</label>
				<input type="password" name="password" >
			</div>
			<input type="submit" name='enviar' value='Login!!'>
			<div id="mensaje"></div>
		</form>
</body>
</html>