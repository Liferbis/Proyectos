<html>
<head>
	<title>HOJA 2</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Calculador de dias</legend>

		<div class="form-group">
			<label for="">La fecha In</label>
			<input type="date" class="form-control" name="fechaI" >
		</div>
		<div class="form-group">
			<label for="">La fecha fin</label>
			<input type="date" class="form-control" name="fechaF" >
		</div>
		<button type="submit" class="btn btn-primary">dale</button>
	</form>

	<?php 
		if (isset($_POST["fechaI"])){
			$fechaI=$_POST["fechaI"];
			$fechaF=$_POST["fechaF"];
			//list es donde guardas los valores que explode te descomprime
			$dias=(strtotime($fechaF)-strtotime($fechaI))/86400;
			$i=$dias;
			list($Y,$m,$d)=explode("-", $fechaI );
			$date = new DateTime('$Y-$m-$d');
			echo "<p>¡¡¡¡la fechaI ".$fechaI."</p>";
			for ($j=1; $j <= $i ; $j++) { 
				echo $d=$d+$j;
				echo date_format($date, 'Y-m-d');
				echo "<p>¡¡¡¡la fechaI ".$aux."</p>";	
			}
			
			list($Y,$m,$d)=explode("-", $fechaF);
			//if(checkdate($Y, $m, $d)){
				echo "<p>la fechaI ".$fechaI;//. " es correcta</p>";
				echo "<p>la fechaF ".$fechaF;//. " es correcta</p>";
				echo "<br>";
				//$hoy=date("j-m-Y");
				$dias=(strtotime($fechaF)-strtotime($fechaI))/86400;
				echo "Los dias son: ".$dias;
			//}
		}else{
			$fecha="";
		}
	?>
</body>
</html>