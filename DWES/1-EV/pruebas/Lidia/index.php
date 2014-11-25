<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lidia</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta chaset="UTF-8"/>
</head>
<body>
		<!-----------------------------------------------------------------------------------------
		----------------------------------------------------------------------------------------------
		------------------   MENU   ------------------------------------------------------------------------------------------------
		---------------------------------------------------------------------------------------------------->

	<nav id="menu" class="navbar navbar-inverse" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Atrevete a conocerme</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li ><a href="Lidia_.php">Quien soy?</a></li>
				<li><a href="Lidia_experiencia.php">De que entiendo</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quieres saber mas sobre mi? <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="Lidia_cv.php">Mi CV en .pdf</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
	
	<div id="box-img" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	        <li data-target="#box-img" data-slide-to="0" class=""></li>
	        <li data-target="#box-img" data-slide-to="1" class=""></li>
	        <li data-target="#box-img" data-slide-to="2" class="active"></li>
	    </ol>
	    <div class="carousel-inner">
	        <div class="item">
	            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" class="img-responsive"  src="img/Lidia (1).JPG">
	            <div class="container">
	                <div class="carousel-caption">
	                    <h1>Experiencia</h1>
	                    <h3>MAMA DULCE</h3>
	                </div>
	            </div>
	        </div>
	        <div class="item">
	            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" class="img-responsive" src="img/Lidia (2).JPG">
	            <div class="container">
	                <div class="carousel-caption">
	                    <h1>Hobbies</h1>
	                </div>
	            </div>
	        </div>
	        <div class="item active">
	            <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" class="img-responsive" src="img/Lidia (3).jpg">
	            <div class="container">
	                <div class="carousel-caption">
	                    <h1>Esta soy yo</h1>
	                </div>
	            </div>
	        </div>
	    </div>
	    <a class="left carousel-control" href="#box-img" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	    <a class="right carousel-control" href="#box-img" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>

	</br>
	<div class="alert alert-warning" >
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>CUIDADO!</strong> Puedes conocerme, o peor, puedes querer saber mas de lo que lees ...
	</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>