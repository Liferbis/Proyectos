<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lidia</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<!--<link rel="stylesheet" type="text/css" href="estilos.css">-->
	<meta chaset="UTF-8"/>
</head>
<body>
		<!-----------------------------------------------------------------------------------------
		----------------------------------------------------------------------------------------------
		------------------   MENU   ------------------------------------------------------------------------------------------------
		---------------------------------------------------------------------------------------------------->

	<nav class="navbar navbar-inverse" role="navigation">
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
				<li class="active"><a href="yo.php">Quien soy?</a></li>
				<li><a href="experiencia.php">De que entiendo</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quieres saber mas sobre mi? <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Mi CV en .pdf</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li><a href="#">Separated link</a></li>
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
	            <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" class="img-responsive" alt="First slide" src="img/back.jpg">
	            <div class="container">
	                <div class="carousel-caption">
	                    <h1>Example headline.</h1>
	                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
	                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
	                </div>
	            </div>
	        </div>
	        <div class="item">
	            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
	            <div class="container">
	                <div class="carousel-caption">
	                    <h1>Another example headline.</h1>
	                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
	                </div>
	            </div>
	        </div>
	        <div class="item active">
	            <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
	            <div class="container">
	                <div class="carousel-caption">
	                    <h1>One more for good measure.</h1>
	                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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