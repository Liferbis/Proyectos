<?php 
	$es=array(
		0=>"enero",
		1=>"febrero",
		2=>	"marzo",
		3=>	"abril",
		4=>	"mayo",
		5=>	"junio",
		6=>	"julio",
		7=>	"agosto",
		8=>	"septiembre",
		9=>	"octubre",
		10=>"noviembre",
		11=>"diciembre"
	);
	$in=array(
		0=>"january",
		1=>"february",
		2=>	"march",
		3=>	"april",
		4=>	"May",
		5=>	"june",
		6=>	"jule",
		7=>	"agust",
		8=>	"september",
		9=>	"october",
		10=>"november",
		11=>"dicember"
		);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ejercicio1</title>
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
					<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
						<legend class="text-center">DICCIONARIO ESPAÑOL-INGLES</legend>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 well">
								<div class="col-sm-2">
									<select  name='selec' id="input" class="form-control" required="required">
										<?php 
											foreach ($es as $key => $value) {
												echo "<option value=";
												echo 	$key;	
												echo " selected='true'>";
												echo 	$value;
												echo "</option>\n";
											}
										 ?>
									</select>
								</div>
							<input type="text"  required="required" name="mes">						
						</div>
						<button type="submit" name="enviar" class="btn btn-primary">Comprobar</button>
					</form>
				</div>
			</div>
				<?php 
					if(isset($_POST["enviar"]) && isset($_POST["mes"])){
						$a=(int)$_POST['selec'];
						$palabra=$_POST["mes"];
						$dicc=$in[$a];
						if($palabra==$dicc){
				?>

							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>CORRECTO !!!</strong> 
							</div>
				<?php 
						}else{
							?>

							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>ERRORRRRR !!!</strong> 
							</div>
				<?php 
		
						}
					}
				?>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>