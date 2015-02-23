<?php 
require_once "..\libreria jquery4php\source-showcase\lib\YepSua\Labs\RIA\jQuery4PHP\YsJQueryAutoloader.php";
YsJQueryAutoloader::register();
 ?>

 <!DOCTYPE html>
 <html lang="ES">
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>EJEMPLO jQuery4PHP</title>
 
 		
 		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
 
 	</head>
 	<body>
 		<h1 class="text-center">EJEMPLO jQuery4PHP</h1>
		 <form action="">
		 	<button id="enviar">Pulsame</button>
		 </form>
 		<!-- jQuery4PHP-->
 		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!-- jQuery -->
 		<script src="//code.jquery.com/jquery.js"></script>
 		<!-- Bootstrap JavaScript -->
 		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 	</body>
 </html>
 <?php
echo YsJQuery::newInstance()
->onClick()
->in('#enviar')
->execute('alert("Has pulsado el botón.")')
?>