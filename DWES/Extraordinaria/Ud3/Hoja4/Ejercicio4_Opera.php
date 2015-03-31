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
					if($_POST["opera"]=="s"){
						$aux="sumar";
						$aun=$num1+$num2;
					}else if($_POST["opera"]=="r"){
						$aun=$num1-$num2;
						$aux="restar";
					}else if($_POST["opera"]=="m"){
						$aux="multiplicar";
						$aun=$num1*$num2;
					}else{
						$aun=$num1/$num2;
						$aux="dividir";
					}
				}
				?>
				<div class='row well'>
					<h3 >El resultado de <strong><?php echo $aux ?></strong> <?php echo $num1; ?> al <?php echo $num2; ?> es: <?php echo $aun ?></h3>
					<a href="Ejercicio4.php">Volver</a>
						
			</div>
			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		</body>
		</html>