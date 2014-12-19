<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grupo Codelse</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="estilo.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="not">
		<h2>NUEVA NOTICIA</h2>
		<div id="notnew" class="row text-center ">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		        	<div class="form-group">
				    	<label >Titulo</label>
				    	<input type="text" class="form-control" name="titulo" required placeholder="Titulo de la noticia">
				    </div>
				    <br>
				    <div class="form-group">
				    	<label for="exampleInputPassword1">Noticia</label>
									
				    	<input type="text" class="form-control" name="noticia" required placeholder="Cuerpo de la noticia">
				    </div>
				    <br>
				    <div class="form-group">
				    	<label for="exampleInputPassword1">Enlace</label>
				    	<input type="text" class="form-control" name="enlace" required placeholder="Enlace a la noticia">
				    </div>
				    <br>
				    <div class="form-group">
				    	<label for="exampleInputFile">Seleccione la imagen de la noticia</label>
				    	<input type="file" name="notimg" required id="exampleInputFile">
				  	</div>
				    <button type="submit" name="publicar" class="btn btn-success">Publicar</button>
				    <br><br>
				</form>
			</div>
		</div>

		<?php 
			if ( isset($_POST["publicar"]) ){
				$titulo=$_POST["titulo"];
				$img=$_POST["notimg"];
				$noticia=$_POST["noticia"];
				$enlace=$_POST["enlace"];

				$Parte1="<div class='row'>
				<div class='col-xs-12 col-sm-4 col-md-3 col-lg-3 '>
					<img class='imagen-responsive' src=";
				$Parte2="'/></br>
				</div>
				<div class='col-xs-12 col-sm-9 col-md-9 col-lg-9 ''>		
					<h3>
						<strong>
				";
				$Parte3="
						</strong>
					</h3>
					<p></p>";
				$Parte4="
					... 
					<p></p>
					<p></p>
					<a href='
				";
				$Parte5="
					' target='_black'><button type='button' id='boton' class='btn btn-large btn-block btn-success'><span class='glyphicon glyphicon-eye-open'/><b> Seguir leyendo</b></button></a>
					</div>
				</div>";
				echo $Parte1.$img.$Parte2.$titulo.$Parte3.$noticia.$Parte4.$enlace.$Parte5;
			}
		 ?>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>