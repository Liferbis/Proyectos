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
			$dias=(strtotime($fechaF)-strtotime($fechaI))/86400;
			$i=$dias;
			echo "Fecha Inicio: ".$fechaI;
			$fechaI = new DateTime($fechaI);
			for ($j=1; $j <= $i ; $j++) { 

				$intervalo = new DateInterval('P1D');

				$fechaI->add($intervalo);
				if($fechaI->format('Y-m-d') == $fechaF){
					echo "<br>Fecha FIN: ".$fechaF;
				}else{
					echo "<br>Fecha Inicio + ".$j." : ";
					echo $fechaI->format('Y-m-d');
				}

			}
		}else{
			$fecha="";
		}
	?>
</body>
</html>