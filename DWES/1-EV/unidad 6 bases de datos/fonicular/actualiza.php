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
		<div class="row text-center">
			<h1 >Funicular</h1>
			<?php 
				include_once "conect.php";
				include_once "funciones.php";
			?>

			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
				<legend > ACTUALIZADOR</legend>
				<hr>
				<?php 
					cargaTabla ();
				 ?>
						
						
				<button type="submit" name="actu" value="actu" class="btn btn-primary">	
					Actualizar
				</button>
				
			</form>
			<hr>
			<a href="index.php">
				<button type="submit"class="btn btn-danger">	
					VOLVER
				</button>
			</a>
			<?php 
				if (isset($_POST["actu"]))
					
			?>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>