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
					<li >
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
					<li class="active">
						<a href="login.php">		
							<span class="glyphicon glyphicon-user"> Login</span>
						</a>
					</li>
					<li>
						<a href="carrito.php">
							<span class="glyphicon glyphicon-shopping-cart"> Carrito</span>
						</a>
					</li>
					<li>
						<a href="contacto.php">
							<span class="glyphicon glyphicon-envelope"> Contacta</span>
						</a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

		
		<div class="row text-center">
			<h1>La Tienduca</h1>
		<?php 
			include_once "conecta.php";
			include_once "funciones.php";
		 ?>

			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
					<table id="tabla" class="table ">
						<thead>
							<tr>
									<h3>Registrate</h3>
								
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
										<label>Contraseña</label>
									</td>
									<td>
										<input type="password"  name="contra" required placeholder="Contraseña">
									</td>
								</div>
							</tr>
						</tbody>
					</table>
					<br><br>
					<button type="submit" class="btn btn-primary">LOGIN</button>
				</form>
				<p></p>
				<h4>¿Has olvidado tu contraseña? Clica <a href="new.php">AQUI!!</a></h4>
				
				<?php 
					if( isset($_POST["nombre"]) && isset($_POST["contra"]) ){
						$nombre=$_POST["nombre"];
						$ctv=md5($_POST["contra"]);
						//echo $nombre.$ctv;
						logea($nombre, $ctv);}
				 ?>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>