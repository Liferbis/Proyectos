<!--
8.- Realizar el ordinograma de un programa que desglose una cantidad de
euros en billetes de 10 y 5 y monedas de 1 euro.
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row ">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
					<legend>Introduce el dinero a desglosar</legend>
					<div class="form-group">
						<input type="double" class="form-control" name="pri" autofocus placeholder="Numero">
					</div>
					
					<button type="submit" class="btn btn-primary">Desglosar dinero</button>
				</form>
			</br>
			</div>
		</div>
		<div class="row well">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php 
					if (isset($_POST["pri"])){
						$dinero=$_POST["pri"];
					}else{
						$dinero=" ";
					}

					echo "<p>Tengo ",$dinero,"€ desglosandolo seria: </p>";
					desc($dinero);


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
								echo "<p>.Billetes de ".$billetes[$i]." = ".$contador."</p>";
							$contador=0;
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
								echo "<p>.Monedas de ".$monedas[$i]." = ".$contador."</p>";
								$contador=0;
							}
						}
					}
				?>
			</div>
		</div>
	</div>
	
<!-- Latest compiled and minified JS -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>