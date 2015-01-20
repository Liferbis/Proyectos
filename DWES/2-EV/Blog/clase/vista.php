<!DOCTYPE html>
 <html lang="es">
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<title>Lidia</title>
 		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
 		<link href="estilo.css" rel="stylesheet">
 	</head>
 	<body>
		<h1 class="text-center">Bienvenido a mi blog</h1>
		<div class="articulo">
	 	<?php foreach ($articulos as $articulo) :?>
	 		<div class="row well">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3><?php echo $articulo->titulo; ?></h3>
			</div>
	 		<div class="col-md-9 col-md-push-3">
				<h6><?php	echo $articulo->fecha ;?></h6>
	 		</div>
	 		<div class="col-md-3 col-md-pull-9">
	 			<p><?php echo $articulo->descripcion ?></p>
	 		</div>
	 	</div>
	 	<?php endforeach; ?>
	 	</div>
 		<script src="//code.jquery.com/jquery.js"></script>
 		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 	</body> 
 </html>