<?php 
require_once "..\libreria jquery4php\source-showcase\lib\YepSua\Labs\RIA\jQuery4PHP\YsJQueryAutoloader.php";
YsJQueryAutoloader::register();
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
	
</head>
	<body>
		<div class="contenedor">
			<h1 class="text-center">Ejemplo movimiento</h1>
			<button type="button" id="btn1">Boton</button>
			<button type="button" id="btn2">Boton</button>
		
			<div id='micapa'class='row well'></div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>

<?php
echo

YsJQuery::newInstance()
->onClick()
->in('#btn1')
->execute(
	YsJQuery::load('texto.txt')
		->in('#micapa')
	);

echo

YsJQuery::newInstance()
->onClick()
->in('#btn2')
->execute(
	YsJQuery::load('texto.php')
		->in('#micapa')
	);

 ?>