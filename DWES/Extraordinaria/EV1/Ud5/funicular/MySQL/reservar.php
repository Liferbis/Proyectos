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
		<h1 class="text-center">Reservar asiento</h1>
		<hr>
		<div class="text-center">
			<form action="" method="POST" role="form">
				<div class="form-group">
					<label >Nombre: </label>
					<input  type="text" class="form-control"  name="nombre" placeholder="Su nombre">
				</div>

				<div class="form-group">
					<select name="sexo" id="inputAsiento" class="form-control">
						<option value="">-- Seleccione su sexo --</option>
						<option value="m">Masculino</option>
						<option value="f">Femenino</option>
					</select>
				</div>

				<div class="form-group">
					<label >DNI: </label>
					<input type="text" class="form-control"  name="dni" placeholder="Su DNI">
				</div>
			
				<div class="form-group">
					<select name="asiento" id="inputAsiento" class="form-control">
						<option value="">-- Seleccione su asiento --</option>
						<?php  
							BD::asientos();
						?>
					</select>
				</div>
			
				<button type="submit" name="reservar"class="btn btn-large btn-block btn-info">Reservar</button>
				<br>
				<a href="index.php" style="color:white">
					<input type="button" value="Cancelar"class="btn btn-large btn-block btn-danger">
				</a>
			</form>
		</div>

		<?php 
			
			if(isset($_POST["nombre"]) && isset($_POST["dni"])){
				$nombre=$_POST["nombre"];
				$dni=$_POST["dni"];
				$sex=$_POST["sexo"];
				$asiento=$_POST["asiento"];
				if(BD::reserva($nombre, $dni, $sex, $asiento)){
			?>
				<hr>
				<h3 class="text-center">Se ha reservado correctamente el asiento <?php echo $asiento; ?></h3>
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