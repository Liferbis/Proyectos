<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3 Lidia</title>

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
			<div class="text-center">
				<?php 
				if(isset($_POST["num1"]) && isset($_POST["num2"])){
					$num1=$_POST["num1"];
					$num2=$_POST["num2"];
					?>
					<div class='row well'>
						<h3 >Lista de pares de números del <?php echo $num1; ?> al <?php echo $num2; ?></h3>
						<h5>
						<?php 
							for ($i=1, $k=$num2; $i <= $num2 ; $i++ , $k--) { 
								echo "(".$i." , ".$k.")";
							}
						?>
						</h5>	
						<a href="Ejercicio3.php">Volver</a>
					</div>
					<?php 
				}
				?>
			</div>
			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		</body>
		</html>