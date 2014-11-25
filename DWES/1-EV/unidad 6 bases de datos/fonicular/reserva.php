<!DOCTYPE html>
<html lang="">
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
		<div class="row  text-center">
			<h1>Funicular</h1>
		<?php 
			include_once "conect.php";
			include_once "funciones.php";
		 ?>

			<div class=" well col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
					<legend>Reserva de asiento</legend>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text"  name="nombre" required placeholder="Nombre">
					</div>
					<div class="form-group">
						<label>DNI</label>
						<input type="text "  required name="dni" placeholder="DNI">
					</div>
					<div class="form-group">
						<label>Asiento</label>
						<select name="asiento"  >
							<?php 
								$a=(int)$_POST['asiento'];
								asientos()
							?>
						</select>
					</div-form-group>
					<br>
					<button type="submit" class="btn btn-primary">RESERVAR</button>
				</form>

				<hr>

				<a class="btn btn-danger" href="index.php">
					VOLVER
				</a>
			
				<?php 

					if(isset($_POST["nombre"]) && isset($_POST["dni"]) ){
						$nombre=$_POST["nombre"];
						$dni=$_POST["dni"];
						$a=$_POST["asiento"];
						insertar($nombre, $dni, $a);
					}

				?>
			</div>
		</div>
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>