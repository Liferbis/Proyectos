<?php 
require_once "librerias\jquery4\source-showcase\lib\YepSua\Labs\RIA\jQuery4PHP\YsJQueryAutoloader.php";
YsJQueryAutoloader::register();
YsJQuery::usePlugin(YsJQueryConstant::PLUGIN_JQVALIDATE);

require_once "head.php";
?>

	<!-- jQuery4PHP-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	 <script type="text/javascript" src="comprobarDNI.js"></script>
	 <script type="text/javascript" src="comprobarTalla.js"></script>
	
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
					<label for='DNI' >DNI:</label><br />
					<input type='text' name='DNI' id='DNI' maxlength="50" />
				</div>

				<div class='campo'>
					<label for='nombre' >Nombre y Apellido:</label><br />
					<input type='text' name='nombre' id='nombre' maxlength="70" />
				</div>

				<div class='campo'>
					<label for='sexo' >Curso:</label><br />
					<select  name='sexo' id='sexo'>
						<option value="m">M (masculino)</option>
						<option value="f">F (femenino)</option>
					</select>
				</div>

				<div class="campo">
					<label for="talla">Talla de Camiseta</label><br />
					<input type="text" name='talla' id='talla' maxlength="2" />
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
				'DNI' => array('required' => true, 'comprobarDNI' => true),
				'nombre' => array('required' => true, 'minlength' => 4),
				'sexo' => array('required' => true),
				'talla' => array('required' => true, 'comprobarTalla' => true)
				)
			)
		);
		?>
	</body>
	</html>
