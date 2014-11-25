<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

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
		<h1 class="text-center">BASE DE DATOS: DWES</h1>

		<?php
			
				include_once "conect.php";
				include_once "funciones.php";

		?>

		<form  class="form-group" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<div class="row well">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h4>Elija la tabla de la base de datos:
						 <?php echo $bd ?>
					</h4>
					</br>
					<div class="text-center">
						<?php
							
							$int="show tables";
							$resultado = $dwes->query($int);
							$tablas=$resultado->fetch_object();	
							while($tablas != null){
								echo "<label><input type='radio' name='tabla'value='$tablas->Tables_in_dwes'>$tablas->Tables_in_dwes</label></br>";
								$tablas=$resultado->fetch_object();
							}
						
						?>
					</div>
					</br>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<button type="submit" class="btn btn-large btn-block btn-info">CONSULTAR</button>
					</div>
				</div>				
			</div>
		</form>

		<form  class="form-group" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<label for="input" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">Mostrador de productos</label>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<select name="pro" id="input" class="form-control">
					<?php 
						$p=$_POST['pro'];
						productos($p) 
					?>
				</select>
				<button type="submit" class="btn btn-large btn-block btn-info">MOSTRAR</button>
					
			</div>
		</form>
		
		<?php mostrarprod($p) ?>

<!--		<form  class="form-group" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
			<label for="input" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">Intruduce la consulta a realizar:</label>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<input type="text" name="consulta" class="form-control" >
			</div>

			<p></p>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<button type="submit" class="btn btn-large btn-block btn-info">CONSULTAR</button>
			</div>

		</form>
-->
		<?php 
			
			if(!empty($_POST) && isset($_POST["tabla"])){ 
				
				if ($_POST["tabla"] =="stock" ){
					stock();
				}else if ($_POST["tabla"]=="familia"){
					familia();
				}else if ($_POST["tabla"]=="producto"){
					producto();
				}else if ($_POST["tabla"]=="tienda"){
					tienda();
				}
			}
				//if(!empty($_POST) && isset($_POST["consulta"]) ){
					//$consulta="'".$_POST["consulta"]."'";
					//realizaconsulta($consulta);
				//}	
								
				$dwes->close();
			
		?>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>

