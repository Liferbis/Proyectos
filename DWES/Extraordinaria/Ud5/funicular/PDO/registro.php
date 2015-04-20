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

				<div class="form-group">
					<label>Repita la contraseña:</label>
					<input type="password" name="ctv1" class="form-control" placeholder="Repita la contraseña">
				</div>
				<button type="submit" name="registra" class="btn btn-large btn-block btn-primary"><strong>Registrar!</strong></button>
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
			if(isset($_POST["nombre"]) && isset($_POST["ctv"]) && isset($_POST["ctv1"])){

				if($_POST["ctv"] == $_POST["ctv1"]){
					$ctv=md5($_POST["ctv"]);
					$estado=BD::registra($_POST["nombre"], $ctv );
					if($estado=="false"){
 		?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>ERROR!</strong> Intentelo de nuevo mas tarde!!
                </div>
        <?php 
            		}else{
            			?>
                <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>CORRECTO!</strong> Creado el usuario <?php echo $_POST["nombre"]; ?>
                </div>
        <?php
            		}
            	}else{
            	?>
	                <div class="alert alert-danger">
	                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                    <strong>ERROR!</strong> Las contraseñas son diferentes!!
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