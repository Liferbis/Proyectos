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
		<h1 class="text-center">Llegada</h1>
		<hr>
		<div class="text-center">
			<form action="" method="POST" role="form">
				<button type="submit" name="llegar" class="btn btn-large btn-block btn-info">
					<strong>
						Llegada
					</strong>
				</button>
				<br>
				<a href="index.php" style="color:white">
					<button type="button" name="volver" class="btn btn-large btn-block btn-danger">
						<strong>
							Volver
						</strong>
					</button>
				</a>
			</form>
		</div>

		<?php 
			require_once "BD.php";
			if(isset($_POST["llegar"])){
				if(BD::llegada()){
			?>
				<hr>
				<h3 class="text-center">Los cambios se han hecho correctamente</h3>
			<?php 
				}else{
			?>
				<hr>
				<h3 class="text-center">ERROR !! Inténtelo de nuevo mas tarde</h3>
			<?php		
				}
			}
		 ?>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>