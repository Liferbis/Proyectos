<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ejercicio 11 Lidia</title>

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
		<h1 class="text-center">Contador de visitas</h1>
		<div class="text-center">
			<form action=" " method="POST" role="form">
				<legend>Rellene los campos:</legend>
			
				<div class="form-group">
					<label>Nombre:</label>
					<input type="text" name="nombre" class="form-control" autofocus placeholder="Nombre">
				</div>

				<div class="form-group">
					<label>Contraseña:</label>
					<input type="password" name="ctv" class="form-control" placeholder="Contraseña">
				</div>
				<button type="submit" name="verrifica" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<?php 
			if(isset($_POST["verrifica"])){
				if (($_POST["nombre"]=="lidia") & ($_POST["ctv"]=="123")) {
					session_start();
					if(isset($_SESSION["visitas"])){
						$_SESSION["visitas"]++;
						echo "Número de veces iniciada la sesión: ".$_SESSION["visitas"];
					}
				}else{
					$_SESSION["visitas"]=0;
 		?>
	                <div class="alert alert-danger">
	                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                    <strong>ERROR!</strong> Usuario Incorrecto
	                </div>
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