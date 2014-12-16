<?php 
	include_once "conecta.php";
	include_once "funciones.php";
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
		<link href="estilo.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="row text-center">
		<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
				<table id="tabla" class="table ">
					<thead>
						<tr>
							<h3>LOGEATE <?php session_start(); echo $_SESSION['usuario']; ?></h3>								
						</tr>
					</thead>
					<tbody>
						<tr>
							<div class="form-group">
								<td>
									<label>Nombre</label>
								</td>
								<td>
									<input type="text"  name="num" required placeholder="Nombre">
								</td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
									<td>
										<label>Contraseña</label>
									</td>
									<td>
										<input type="password"  name="contra" required placeholder="Contraseña">
									</td>
								</div>
							</tr>
						</tbody>
					</table>
					<br><br>
					<button type="submit" class="btn btn-primary">LOGIN</button>
			</form>
				
				<?php 
					if( isset($_POST["num"]) && isset($_POST["contra"]) ){
						$num_cliente=$_POST["num"];
						$password=md5($_POST["contra"]);
						logea($num_cliente, $password);
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