<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

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
		<h1>Ejercicio 4:</h1>
		<h3>Haz una página PHP que utilice foreach para mostrar todos los valores
del array $_SERVER en una tabla con dos columnas. La primera columna debe
contener el nombre de la variable, y la segunda su valor</h3>
		<div class="row well">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Variable</th>
							<th>Valor</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($_SERVER as $key => $value) {
								echo "<tr><td>".$key."</td><td>".$value."</td></tr>"; 
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>