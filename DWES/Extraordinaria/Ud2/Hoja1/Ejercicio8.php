<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ejercicio 8 Lidia</title>
		<?php 
			function desc($dinero){
			$d=10;
			$aux =$dinero % $d;
			if($aux == 0){
				$aux=$dinero/$d;
				echo "<li>-",(floor($aux)) ," billetes de 10€</li>";
			}else {
				$div=$dinero/$d;
				$aux=$dinero%$d;
				$t=$aux%5;
				if($t==0){
					$t=$aux/5;
					echo "<li> Billetes de 10€ = ".(floor($div))."</li>";
					echo "<li> Billetes de 5€ = ".(floor($t))."</li>";
				}else{
					$t=$aux/5;
					echo "<li> Billetes de 10€ = ".(floor($div))."</li>";
					echo "<li> Billetes de 5€ = ".(floor($t))."</li>";
					$t=$aux%5;
					echo "<li>Monedas restantes = ".$t. "€ </li>" ;
				}

			}
		}
		 ?>
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
		<h1 class="text-center">Desglose de cantidades</h1>

		<div class="row well">
			<form action="" method="POST" role="form">
				<legend>Intruduce la cantidad a desglosar</legend>
				<div class="form-group">
					<input type="text" name="dinero" class="form-control" placeholder="Introduce cantidad entera de €">
				</div>
				<p><small>El desglose se realiza en billetes de 10€, de 5€ y monedas de 1€</small></p>
				<button type="submit" name="desglose" class="btn btn-primary">Desglosar</button>
			</form>
			
			<?php 
			if(isset($_POST["dinero"])){
				$dinero =$_POST["dinero"];
			?>
			<ul>
				<li><strong>Tengo <?php echo $dinero ?> € desglosandolo seria:</strong></li>
				<?php 
					desc($dinero);
				 ?>
			</ul>
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