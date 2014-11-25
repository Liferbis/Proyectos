<html>
<head>
	<title>Ej7</title>
	<meta charset="UTF-8" />
</head>
<body>
	<h1>PROBLEMA</h1>
	<h3>Determinar el precio del billete de ida y vuelta en ferrocarril, conociendo
la distancia a recorrer y sabiendo que si el número de días de estancia
es superior a 7 y la distancia es superior a 800 km el billete tiene una
reducción del 30 por ciento. El precio por km es de 2.5€</h3>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
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
		}else{
			$distancia="";
			$dias="";
		}
	?>
</body>
</html>