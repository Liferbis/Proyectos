<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3 Lidia</title>

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
	<div class="text-center">
			<h3 >Lista de numeros:</h3>
			<form action="Ejercicio4_Opera.php" method="POST" role="form">
				<div class="row">
					<label>Introducca el primer número entero</label>
					<input type="number" name="num1" placeholder="Introducca un numero entero">
				</div>
				<div class="row">	
					<label>Introducca el segundo número entero</label>
					<input type="number" name="num2" placeholder="Introducca un numero entero">
				</div>
				<button type="submit" class="btn btn-primary">Enviar datos</button>
				<div class="row">
					<input type="radio" name="opera" id="input" value="s" checked="checked">
						Suma
					<input type="radio" name="opera" id="input" value="r" >
						Resta
					<input type="radio" name="opera" id="input" value="m" >
						Multiplica
					<input type="radio" name="opera" id="input" value="d" >
						Divide
					</label>
				</div>
			</form>


	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
