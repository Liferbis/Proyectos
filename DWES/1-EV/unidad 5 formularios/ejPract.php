<!--
8.- Realizar el ordinograma de un programa que desglose una cantidad de
euros en billetes de 10 y 5 y monedas de 1 euro.
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row ">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="procesa.php" method="POST" role="form">
					<legend>Nombre del alumno</legend>
					<div class="form-group">
						<input type="text" class="form-control" name="pri" autofocus placeholder="Nombre">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="DAW1" value="DEWS" checked="checked">
								Desarrollo Web en Entorno Servidor
							</input>
						</label>
						</br>
						<label>
							<input type="checkbox" name="DAW" value="DEWC" checked="checked">
								Desarrollo Web en Entorno Cliente
							</input>
						</label>
					</div>
					
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</br>
			</div>
		</div>
		
	</div>
	
<!-- Latest compiled and minified JS -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>