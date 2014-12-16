<?php 
	session_start();
	if ( !isset($_SESSION["usuario"]) ) {
		header("Location: login.php");
	} else {
?>
		<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ejercicio-2</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="row  text-center">
			<h1>LOGOUT</h1>
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<h3>¿Está seguro de que desea cerrar la sesión?</h3>
				<button type="submit" class="btn btn-primary" name="sesion" value="1">Si</button>
				<button type="submit" class="btn btn-primary" name="sesion" value="0">No</button>
			</form>
		</div>

<?php 		
		if ( isset($_POST["sesion"]) ) {
			if($_POST["sesion"] == "1") {
				session_unset();
				header("Location: login.php");
			} else {
				header("Location: resumen.php");
			}
			
		}  
	} 
?>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>