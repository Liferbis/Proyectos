<?php 
require_once 'lib-xajax.php'; 
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
	 <script type="text/javascript" src="validar.js"></script>
	

</head>
<body>
	<form id="datos" action="javascript:void(null);" onsubmit="enviarFormulario();">
			<div class="campo">		
					Nombre:
					<input type="text" name="nombre" id="nombre" />
					<span id='errorNombre' for='nombre' >
					</span>
			</div>
			<div class="campo">	
					DNI:
					<input type="text" name="DNI" id="DNI">
					<span id='errorDNI' for='DNI'>
					</span>	
			</div>
			<div class="campo">	
					Contraseña	
					<input type="password" name="password1" id='password1'>
					<span id='errorPassword' for='password'>
						</span>
			</div>
			<div class="campo">	
				Repita la contaseña:	
				<input type="password" name="password2" id='password2'>
			</div>
			<div class="campo">
				<input type='submit' name='enviar' value='enviar' />
			</div>
			<div id="mensaje"></div>
		</form>
	

	
</body>
</html>