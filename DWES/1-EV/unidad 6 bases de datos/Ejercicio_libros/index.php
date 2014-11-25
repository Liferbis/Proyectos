<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Libros</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="estilo.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php
			include_once "conect.php";
		?>
		
		<div class="contenedor" >
			<form class="form-group" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
				<h1>Inserta un nuevo libro</h1>
				<div class="row well">
						<div class="text-center">
							<label for="input" class="nombre">Intruduce el titulo del libro:</label>
							<input type="text" name="nombre" class="form-control" >
						</div>
				</div>
				<div class="row well">
						<div class="text-center">
							<label for="input" class="precio">Intruduce el precio del libro:</label>
							<input type="float" name="precio" class="form-control" >
						
					</div>
				</div>
				<div class="row well">
						<div class="text-center">
							<label for="input" class="precio">Intruduce el fecha de adquisición del libro:</label>
							<input type="date" name="fecha" class="form-control" >
						</div>
				</div>
				<div class="row well">
					<div class="text-center">
							<label for="input" class="precio">Intruduce el fecha de edición del libro:</label>
							<input type="date" name="anio" class="form-control" >
						
					</div>
				</div>
				<div class="boton">
					<button type="submit" class="btn btn-large btn-block btn-info">Introduce</button>
				</div>
			</form>

			<form class="form-group" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
				<div class="radio">
					<label>
						<input type="radio" name="muestra" id="inputMuestra" ><h1>Muestra todos los libros</h1>
					</label>
				</div>
				<div class="boton">
					<button type="submit" class="btn btn-large btn-block btn-info">Muestra</button>
				</div>
			</form>
		</div>
		
		

		<?php 
			include_once "funcion.php";
			if(!empty($_POST) && isset($_POST["nombre"]) && isset($_POST["precio"]) && isset($_POST["fecha"]) && isset($_POST["anio"]) ){
				
				$nombre="'".$_POST["nombre"]."'";
				$precio=$_POST["precio"];
				$fecha=$_POST["fecha"];
				$anio=$_POST["anio"];
				
				cargadatos($nombre, $fecha, $anio, $precio);
				
			}else{
				$nombre=" ";
				$precio=" ";
				$fecha=" ";
				$anio=" ";
			}

			if (!empty($_POST) && isset($_POST["muestra"]) ){
				muestra();

			} else{
				$muestra=" ";
			}



			$dwes->close();
			
		?>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>