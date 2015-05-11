<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Examen E1</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<?php 
			$numerosR=array();
			for ($i=20, $j=0; $i >=1 & $j<=20; $i--, $j++) { 
				$numerosR[$j]=$i;
			}
		//var_dump($numerosR);
		?>
	</head>
	<body>
		<h1 class="text-center">Comprobador de sumas</h1>
		<div class="text-center">
			<form action="" method="POST" role="form">
				<div class="row">
					<input type="number" name="num1" placeholder="Introduce un numero">
					<strong> + </strong>
					<input type="number" name="num2" placeholder="Introduce un numero">
					<strong> = </strong>
					<select name="resultado" class="form-control">
						
						<?php 
							for ($j=0; $j<count($numerosR); $j++) { 
						?>
						<option value="<?php echo $numerosR[$j]; ?>">
						<?php echo $numerosR[$j]; ?>		
						</option>
						<?php 
							}
						 ?>
					</select>
				</div>
				<button type="submit" name="comp" class="btn btn-primary">Comprobar</button>
			</form>
		</div>

		<?php 
			if(isset($_POST["comp"])){
				if( isset($_POST["num1"]) & isset($_POST["num2"]) ){
					$rcorrecto=($_POST["num1"])+($_POST["num2"]);
					if($rcorrecto == $_POST["resultado"]){
						echo "<h1 style='color:blue'>FELICIDADES <br> El resultado es correcto!!!</h1>";
					}else{
						echo "<h1 style='color:red'>ERROR! <br> FELICIDADES <br> Has descubierto la respuesta INCORRECTA!!!</h1>";
					}
				 
				}
			}

		?>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>