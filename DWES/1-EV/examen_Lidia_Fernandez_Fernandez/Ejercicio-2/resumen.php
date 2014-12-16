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
				<table id="tabla" class="table ">
					<thead>
						<tr>
							<?php session_start(); echo $_SESSION['usuario']; ?>
						</tr>
						<tr>
							<th>Cuenta/s</th>
							<th>Saldo</th>								
						</tr>
					</thead>
					<tbody>
						<?php cargatabla() ?>		
					</tbody>
				</table>
				<br><br>
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
					<button type="submit" name="traspaso" class="btn btn-primary">Realizar traspaso</button>
					<button type="submit" name="logout" class="btn btn-primary">Desconectar </button>
				</form>	
			</div>
		</div>

		<?php 
			if( isset($_POST["traspaso"])  ){
				header('Location: traspaso.php');
			}else if( isset($_POST["logout"]) ){
				header('Location: logout.php');
			}

		?>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>