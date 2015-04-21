<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2 Lidia</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row ">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="" method="POST">
					<legend>Introduce el dinero a desglosar</legend>
					<div class="form-group">
						<input type="double" name="pri" autofocus placeholder="Numero">
					</div>
					
					<button type="submit" class="btn btn-primary">Desglosar dinero</button>
				</form>
			</br>
		</div>
	</div>
	<?php 
	if (isset($_POST["pri"])){
		$dinero=$_POST["pri"];
		?>
		<div class="row well">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php 
				echo "<p>Tengo ",$dinero,"€ desglosandolo seria: </p>";
				desc($dinero);
				?>
			</div>
		</div>
		<?php 
	}




	function desc($dinero){
		$monedas=array(
			0=>"0.01",
			1=>"0.02",
			2=>"0.05",
			3=>"0.10",
			4=>"0.20",
			5=>"0.50",
			6=>"1",
			7=>"2");
		$billetes=array(
			0=>"5",
			1=>"10",
			2=>"20",
			3=>"50",
			4=>"100",
			5=>"200",
			6=>"500");

		for($i=6; $i>=0; $i--){
			$aux=$billetes[$i];
			$contador=0;
			while($dinero>=$aux){
				$dinero=$dinero-$aux;
				
				$contador++;
			}
			if($contador>0){
				echo "<li>Billetes de ".$billetes[$i]." = ".$contador."</li>";
			}
		}

		for($i=7; $i>=0; $i--){
			$aux=$monedas[$i];
			$contador=0;
			while($dinero>=$aux){
				$dinero=$dinero-$aux;
				
				$contador++;
			}
			if($contador>0){
				echo "<li>Monedas de ".$monedas[$i]." = ".$contador."</li>";
			}
		}
	}
	?>

</div>

<!-- Latest compiled and minified JS -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>