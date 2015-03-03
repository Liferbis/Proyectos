<?php 
require_once "librerias\jquery4\source-showcase\lib\YepSua\Labs\RIA\jQuery4PHP\YsJQueryAutoloader.php";
YsJQueryAutoloader::register();
YsJQuery::usePlugin(YsJQueryConstant::PLUGIN_JQVALIDATE);

?>

	<!-- jQuery4PHP-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="comprobarDNI.js"></script>
	
</head>
<body>
	<?php 
	echo YsJQueryAssets::loadScripts('messages_es.js')->execute();
	?>
	<div id='form'>
		<form id="datos" action="index.php" method="POST">
			<fieldset >
				<legend>Introducción de datos</legend>

				<div class='campo'>
					<label for='nombre' >Nombre:</label><br />
					<input type='text' name='nombre' id='nombre' maxlength="50" />
				</div>

				<div class='campo'>
					<label for='numMatricula' >Numero de matricula:</label><br />
					<input type='integer' name='numMatricula' id='numMatricula' maxlength="50" />
				</div>

				<div class='campo'>
					<label for='curso' >Curso:</label><br />
					<input type='curso' name='curso' id='curso' maxlength="50" />
				</div>


				<div class='campo'>
					<input type='submit' id='enviar' name='enviar' value='Enviar' />
				</div>
			</fieldset>

		</form>
	</div>
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
				'numMatricula' => array('required' => true, 'minlength' => 3),
				'curso' => array('required' => true, 'minlength' => 3 )
				)
			)
		);
		?>
	</body>
	</html>


