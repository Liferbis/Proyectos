<?php 
require_once "BD.php";
 ?>
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
		<h1 class="text-center">GESTION DEL FONICULAR</h1>
		<h1 class="text-center">Autentificación</h1>
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
				$ctv=md5($_POST["ctv"]);
				$estado=BD::verifica($_POST["nombre"], $ctv );
				if($estado=="false"){
 		?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>ERROR!</strong> Usuario Incorrecto
                </div>
        <?php 
            	}else{
            		require_once "principal.php";
            	}
			}

		 ?>
		
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>