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

	<style>
		body{
			background: #000;
			color:#FFF;
		}
		#micapa{
			color:#FF123F;
			position: relative;
			width: 300px;
			height: 250px;
			background: #F3F3F3;
		}
	</style>
<!-- jQuery4PHP-->
 	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
</head>
	<body>
		<h1 class="text-center">Ejemplo movimiento</h1>
		<button type="button" id="grande">Agrandar</button>
		<button type="button" id="peq">Achicar</button>
	
		<div id='micapa'>Esta capa se mueve</div>
		
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
->in('#grande')
->execute(
	YsJQuery::animate()
		->in('#micapa')
	    ->properties(array(
			"width"=>"800px", 
			"height"=>"750px"))
		->duration(YsJQueryConstant::SLOW));
echo

YsJQuery::newInstance()
->onClick()
->in('#peq')
->execute(
	YsJQuery::animate()
		->in('#micapa')
	    ->properties(array(
			"width"=>"300px", 
			"height"=>"250px"))
		->duration(YsJQueryConstant::SLOW));

 ?>