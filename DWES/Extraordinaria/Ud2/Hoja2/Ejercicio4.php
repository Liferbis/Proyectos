<html>
<head>
	<title>Ejercicio 4 Lidia</title>
</head>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Calculador de dias</legend>

		<div class="form-group">
			<label for="">La fecha Inicial</label>
			<input type="date" class="form-control" name="fechaI" >
		</div>
		<div class="form-group">
			<label for="">La fecha final</label>
			<input type="date" class="form-control" name="fechaF" >
		</div>
		<button type="submit" class="btn btn-primary">dale</button>
	</form>

	<?php 
		if (isset($_POST["fechaI"])){
			$fechaI=$_POST["fechaI"];
			$fechaF=$_POST["fechaF"];
			$dias=round((strtotime($fechaF)-strtotime($fechaI))/86400);
	?>
	<h1>Los dias transcurridos son : 
		<?php 
			echo $dias;
		 ?>
	</h1>
	<?php 
		}
	?>
</body>
</html>
	
