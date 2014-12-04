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
				<a class="navbar-brand" href="./">LaTienduca</a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active">
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
										<label>1º Apellido</label>
									</td>
									<td>
										<input type="text"  name="apellido1" required placeholder="1º apellido">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>2º Apellido </label>
									</td>
									<td>
										<input type="text"  name="apellido2" required placeholder="2º Apellido">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Direccion</label>
									</td>
									<td>
										<input type="text"  name="direccion" required placeholder="Direccion">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Codigo postal</label>
									</td>
									<td>
										<input type="text"  name="cp" required placeholder="Codigo postal">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Comunidad autonoma</label>
									</td>
									<td>
										<input type="text"  name="autonoma" required placeholder="Comunidad autonoma">
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
							<tr>
								<div class="form-group">
									<td>
										<label>Repita Contraseña</label>
									</td>
									<td>
										<input type="password"  name="contra1" required placeholder="Repita la contraseña">
									</td>
								</div>
							</tr>
							<tr>
								<div class="form-group">
									<td>
										<label>Provincia</label>
									</td>
									<td>
										<label>España</label>
									</td>
								</div>
							</tr>
						</tbody>
					</table>
					<br><br>
					<button type="submit" class="btn btn-primary">REGISTRARSE</button>
				</form>

				<hr>
			
				<?php 
					$guarda=false;
					if(isset($_POST["nombre"]) && isset($_POST["dni"])&& isset($_POST["apellido1"]) && isset($_POST["apellido2"]) && isset($_POST["direccion"]) && isset($_POST["cp"]) && isset($_POST["autonoma"]) ){

						if( isset($_POST["contra"]) && isset($_POST["contra1"]) ){
							$ctv=$_POST["contra"];
							$aux=$_POST["contra1"];
							if($ctv==$aux){
								$guarda=true;
							}else{
				?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>ERROR</strong> Las contraseñas no coinciden !!!!!
								</div>
				<?php 
							}
						}
						if($guarda==true){
							$ctv=md5($ctv);	
							$nombre=$_POST["nombre"];
							$dni=$_POST["dni"];
							$ap1=$_POST["apellido1"];
							$ap2=$_POST["apellido2"];
							$dire=$_POST["direccion"];
							$cp=$_POST["cp"];
							$a=$_POST["autonoma"];
							//echo $nombre.$dni.$ap1.$ap2.$dire.$cp.$a.$ctv;
							registrar ($nombre, $dni, $ap1, $ap2, $dire, $cp, $a, $ctv);
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