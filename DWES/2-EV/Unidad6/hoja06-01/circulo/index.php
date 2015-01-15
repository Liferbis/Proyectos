<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>OBJETO CICULO</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<?php 
			include_once ('circulo.php');
		 ?>
		<h1 class="text-center">OBJETO CICULO</h1>
		<?php 
			$t=4;
			$r= new circulo($t);
		 ?>
		<h1 class="text-center">El radio es:  
			<?php 
				$r->radio=2; 
				echo $r->radio; 
			?>
			cm
		</h1>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>