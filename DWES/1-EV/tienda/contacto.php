<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LaTienduca</title>

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
	<body>
		<nav class="navbar navbar-inverse navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="./">La Tienduca</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li >
						<a href="registro.php">
							<span class="glyphicon glyphicon-pencil"> Registrate</span>
						</a>
					</li>
					<li>
						<a href="productos.php">
							<span class="glyphicon glyphicon-barcode"> Productos</span> 
						</a>
					</li>
				</ul>
			<!--
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			-->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="login.php">		
							<span class="glyphicon glyphicon-user"> Login</span>
						</a>
					</li>
					<li>
						<a href="carrito.php">
							<span class="glyphicon glyphicon-shopping-cart"> Carrito</span>
						</a>
					</li>
					<li class="active">
						<a href="contacto.php">
							<span class="glyphicon glyphicon-envelope"> Contacta</span>
						</a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

		<div class="row  text-center">
			<h1>La Tienduca</h1>

			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
					<table id="tabla" class="table ">
						<thead>
							<tr>
								<h3>Rellene los campos</h3>
							</tr>
						</thead>
						<tbody>
							<tr>
								<div class="form-group">
								<td>
									<label>Nombre</label>
								</td>
								<td>
									<input type="text"  name="nombre" required placeholder="Nombre">
								</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>DNI</label>
									</td>
									<td>
										<input type="text "  required name="dni" placeholder="DNI">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>e-mail</label>
									</td>
									<td>
										<input type="email"  name="mail" required placeholder="ejemplo@ejemplo.ej">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Asunto</label>
									</td>
									<td>
										<input type="text"  name="asunto" required placeholder="Asunto">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Mensaje </label>
									</td>
									<td>
										<textarea rows="4" cols="50" type="text" name="sms" required placeholder="Mensaje" >
										</textarea>
									</td>
								</div>
							</tr>
						</tbody>
					</table>
					<br><br>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
		<?php 

			if( isset($_POST["nombre"]) && isset($_POST["dni"]) && isset($_POST["mail"])&& isset($_POST["asunto"]) && isset($_POST["sms"]) ){		
				$nombre=$_POST["nombre"];
				$dni=$_POST["dni"];
				$mail=$_POST["mail"];
				$sms=$_POST["sms"];
				$asunto=$_POST["asunto"];
				echo $nombre."<br>".$dni."<br>".$mail."<br>".$asunto."<br>".$sms;
				formulario($nombre, $dni, $mail, $asunto, $sms);
			}
		 ?>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>