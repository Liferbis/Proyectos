<html>
<head>
	<title>Ejercicio 7 Lidia</title>
</head>
<body>
	<h1>Precio del billete</h1>
	<form action=" " method="POST" role="form">
		<legend>Introduce la distancia</legend>
		<div class="form-group">
			<input type="number" class="form-control" name="dis" autofocus placeholder="Distancia">
		</div>
		<legend>Introduce los dias de estancia</legend>
		<div class="form-group">
			<input type="number" class="form-control" name="dias" placeholder="Dias">
		</div>
		<button type="submit" class="btn btn-primary">Calcula</button>
	</form>

	<?php 
		if ( (isset($_POST["dis"])) && (isset($_POST["dias"])) ){
			$distancia=$_POST["dis"];
			$dia=$_POST["dias"];
			$dinero=$distancia*2.5;
			if( ($distancia>800) && ($dia>7) ){
				$r=($dinero*30)/100;
				$dinero=$dinero-$r;
				echo "<p>Total a pagar ".$dinero." con un descuento ya aplicado del 30%</p>";
			}else{
				echo "<p>Total a pagar ".$dinero."</p>";
			}
		}
	?>
</body>
</html>