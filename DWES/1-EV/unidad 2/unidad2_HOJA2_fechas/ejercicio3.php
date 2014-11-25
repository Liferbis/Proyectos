<html>
<head>
	<title>HOJA 2</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Calculador de dias</legend>

		<div class="form-group">
			<label for="">La fecha</label>
			<input type="date" class="form-control" name="fecha" >
		</div>
		<button type="submit" class="btn btn-primary">dale</button>
	</form>

	<?php 
		if (isset($_POST["fecha"])){
			$dfecha=$_POST["fecha"];
			//list es donde guardas los valores que explode te descomprime
			list($y,$m,$d)=explode("-", $fecha);
			if(checkdate($m, $d, $y)){
				echo "<p>la fecha ".$dfecha. " es correcta</>";
			}else{
				$hoy=date("j-m-Y");
				$dias=(strtotime($hoy)-strtotime($dfecha))/86400;
				echo "Los dias son: ".$dias;
			}
		}else{
			$fecha="";
		}
	?>
</body>
</html>