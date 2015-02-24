<?php 
require_once "..\libreria jquery4php\source-showcase\lib\YepSua\Labs\RIA\jQuery4PHP\YsJQueryAutoloader.php";
YsJQueryAutoloader::register();
YsJQuery::usePlugin(YsJQueryConstant::PLUGIN_JQVALIDATE);

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EJEMPLO jQuery4PHP</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery4PHP-->
 	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
 	<script type="text/javascript" src="comprobarDNI.js"></script>
	
</head>
<body>
<?php

echo YsJQueryAssets::loadScripts('..\libreria jquery4php\source-showcase\showcase\jquery4php-assets\js\plugins\bassistance\validate\localization\messages_es.js')->execute();

?>
	<div class="contenedor">
	<form id="datos" action="javascript:void(null);">
			<div class="campo">		
				Nombre:
				<input type="text" name="nombre" id="nombre" />
			</div>
			<div class="campo">	
				DNI	
				<input type="text" name="DNI" id='DNI'>
			</div>
			<div class="campo">	
				Contraseña	
				<input type="password" name="password1" id='password1'>
			</div>
			<div class="campo">	
				Repita la contaseña:	
				<input type="password" name="password2" id='password2'>
			</div>
			
			<div class="campo">
				<input type='submit' id='enviar' name='enviar' value='enviar' />
			</div>
			
		</form>
 		</div>
		<!-- jQuery -->
 		<script src="//code.jquery.com/jquery.js"></script>
 		<!-- Bootstrap JavaScript -->
 		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<?php
echo YsJQuery::newInstance()
	->onClick()
	->in("#enviar")
	->execute( 
		YsJQValidate::build()
			->in('#datos')
			->_rules(
				array(
					'nombre' => array('required' => true, 'minlength' => 4),
					'password1' => array('required' => true, 'minlength' => 6, 'equalTo' => '#password2'),
					'DNI' => array('required' => true, 'comprobarDNI' => true)
					)
				)
		);
?>
 	</body>
 </html>


