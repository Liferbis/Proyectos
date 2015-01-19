<?php 
	require_once "calendario.php";
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejemplo</title>
	<meta charset="utf-8">
	<link href="estil.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<h1>Ejemplo de un simple calendario en PHP</h1>
	<div class='row'>
		
			<?php 
				$hoy=new Calendario();
				$hoy->getTodosMeses();
			 ?>
	</div>

	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>