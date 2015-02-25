<?php
/**
* Desarrollo Web en Entorno Servidor
*/
// Incluimos la librería jQuery4PHP
require_once("..\..\libreria jquery4php\source-showcase\lib\YepSua\Labs\RIA\jQuery4PHP\YsJQueryAutoloader.php");
YsJQueryAutoloader::register();
// Y el plugin de validación
YsJQuery::usePlugin(YsJQueryConstant::PLUGIN_JQVALIDATE);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Validación formulario con jQuery4PHP</title>
		<link rel="stylesheet" href="estilo.css" type="text/css" />
		<!-- Incluímos la librería de JavaScript jQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript" src="ivanDNI.js"></script>
	</head>
	
	<body>
		<?php
			// Cargamos los mensajes de validación en castellano
				echo YsJQueryAssets::loadScripts('..\..\libreria jquery4php\source-showcase\showcase\jquery4php-assets\js\plugins\bassistance\validate\localization\messages_es.js')->execute();
		?>

		<div id='form'>
			<form id='datos' action="javascript:void(null);">
				<fieldset >
					<legend>Introducción de datos</legend>
					
					<div class='campo'>
						<label for='nombre' >Nombre:</label><br />
						<input type='text' name='nombre' id='nombre' maxlength="50" />
					</div>
					
					<div class='campo'>
						<label for='DNI' >DNI:</label><br />
						<input type='text' name='DNI' id='DNI' maxlength="50" />
					</div>
					
					<div class='campo'>
						<label for='password1' >Contraseña:</label><br />
						<input type='password' name='password1' id='password1' maxlength="50" />
					</div>
					
					<div class='campo'>
						<label for='password2' >Repita la contraseña:</label><br />
						<input type='password' name='password2' id='password2' maxlength="50" />
					</div>
					
					<div class='campo'>
						<input type='submit' id='enviar' name='enviar' value='Enviar' />
					</div>
				</fieldset>
			</form>
		</div>
		
		
		<?php
		echo
		YsJQuery::newInstance()
			->onClick()
			->in("#enviar")
			->execute(
				YsJQValidate::build()->in('#datos')
					->_rules(
						array('nombre' => array('required' => true, 'minlength' => 4),
						'password1' => array('required' => true, 'minlength' => 6, 'equalTo' => '#password2'),
						'DNI' => array('required' => true, 'comprobarDNI' => true)
						)
				)
			);
		?>
	</body>
</html>