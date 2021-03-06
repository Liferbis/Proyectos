<?php require_once "BaseDeDatos.php"; ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vacaciones</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<!-- <link href="estil.css" rel="stylesheet"> -->

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
				<a class="navbar-brand" href="./">Agenda </a>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li >
						<a href="calendario.php">
							<span id="gliphicon" class="glyphicon glyphicon-calendar"></span> Calendario 
						</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="login.php">		
							<span id="gliphicon" class="glyphicon glyphicon-user"></span> Login
						</a>
					</li>
				<?php 
					session_start();
					if (isset($_SESSION["usuario"])){
				?>
					<li>
						<a href="log-out.php">
							<span id="gliphicon" class="glyphicon glyphicon-off"></span> Login-Off
						</a>
					</li>
				<?php 
					}
				?>					
					<li id="dropdown" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span id="gliphicon" class="glyphicon glyphicon-cog"></span>
								Configuracion Empleados
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="gestion.php">
									<span id="gliphicon" class="glyphicon glyphicon-check"></span> Alta Empleado
								</a>
							</li>
							<li>
								<a href="ModificaEmpleado.php">
									<span id="gliphicon" class="glyphicon glyphicon-edit"></span>
									Modificar empleado
								</a>
							</li>
							<li>
								<a href="comentarios.php">
									<span id="gliphicon" class="glyphicon glyphicon-tag"></span>
									Añadir/Quitar comentario
								</a>
							</li>
							<li>
								<a href="BorrarEmpleado.php">
									<span id="gliphicon" class="glyphicon glyphicon-remove"></span>
									Borrar empleado
								</a>
							</li>
							<!-- <li>
								<a href="#">
									<span id="gliphicon" class="glyphicon glyphicon-cog"></span>
									Separated link
								</a>
							</li> -->
						</ul>
					</li>
					
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

