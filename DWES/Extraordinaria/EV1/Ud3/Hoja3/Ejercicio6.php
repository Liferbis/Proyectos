<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ejercicio 6 Lidia</title>

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
		<h1 class="text-center">Verbos</h1>
		<div class="row well">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<h3 class="text-center">Terminación -ar</h3>
				<ul>
					<li>Cantar</li>
					<li>Bailar</li>
					<li>Asesinar</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<h3 class="text-center">Terminación -er</h3>
				<ul>
					<li>Comer</li>
					<li>Correr</li>
					<li>Beber</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<h3 class="text-center">Terminación -ir</h3>
				<ul>
					<li>Recibir</li>
					<li>Partir</li>
					<li>Permitir</li>
				</ul>
			</div>
		</div>
		
		<?php 
			$verbos=array("Cantar", "Bailar", "Asesinar", "Comer", "Correr", "Beber", "Recibir", "Partir", "Permitir");
			$num=rand(0,8);
			$verbo=$verbos[$num];
			$aux=substr($verbo, 0,-2);
			$pronombre=array("Yo ", "Tú", "Él", "Nosotros", "Vosotros", "Ellos");
			$presenteAr=array("o", "as", "a", "amos", "áis", "an");
			$presente=array("o", "es", "e", "emos", "éis", "en");
			$presenteIr=array("o", "es", "e", "imos", "ís", "en");
			?>
			<div class='row well'>
				<div class='text-center'>
					<h3>Presente de indicativo del verbo: <?php echo $verbo; ?></h3>
					
			<?php 
			if($num<=2){
				echo $num;
				for ($i=0; $i < 6 ; $i++) { 
					echo "<br>".$pronombre[$i]."   ".$aux.$presenteAr[$i];
				}
			}else if($num>2 && $num<=5){
				echo $num;
				for ($i=0; $i < 6 ; $i++) { 
					echo "<br>".$pronombre[$i]."   ".$aux.$presente[$i];
				}
			}else{
				echo $num;
				for ($i=0; $i < 6 ; $i++) { 
					echo "<br>".$pronombre[$i]."   ".$aux.$presenteIr[$i];
				}
			}
		 ?>

				
			</div>	
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>