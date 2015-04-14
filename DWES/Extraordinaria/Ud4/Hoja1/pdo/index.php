<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Funicular</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Gestión del funicular</h1>
		
			<legend class="text-center">Elija una opción:</legend>
			<a href="reservar.php" >
				<button type="button" name="reser" class="btn btn-large btn-block btn-primary">
					Reservar Plaza
				</button>	
			</a>
			<a href="llegada.php" >
				<button type="button" name="llegada" class="btn btn-large btn-block btn-warning">
					Llegada al destino
				</button>
			</a>
			<a href="plazas.php">
				<button type="button" name="llegada" class="btn btn-large btn-block btn-success">
					Modificar plazas
				</button>
			</a>
		
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>