<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta chaeset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<link rel="stylesheet" href="../libreriaJQ/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">

	<script type="text/javascript" src="../libreriaJQ/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="../libreriaJQ/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
	
		
</head>
<body>
<!-- PRINCIPIO pagina 1 -->
	<div data-role="page" id="home">
		<div data-role="header" data-theme="b">
			<h1>Cabecera 2</h1>
		</div>
		<div  data-role="content" data-theme="a">
			<hr>
			<a href="basico-4-PagExternas.html" data-role="button" data-theme="a" >Volver a home!</a>
			<hr><hr>
			<h3 style="text-align:center;">efecto ( data-transition="slidedown" )</h3>
			<a href="basico-4-PagExternas.html" data-role="button" data-transition="slidedown" data-theme="a" >Volver a home!</a>
			<hr><hr>
			<h3 style="text-align:center;">efecto ATRAS! ( data-rel="back" ) <br> efecto contrario al realizado</h3>
			<a href="basico-4-PagExternas.html" data-role="button" data-rel="back" data-theme="a" >Volver a home!</a>
		</div>
		<div data-role="footer" data-theme="b">
			<h4>pie</h4>
		</div>
	</div>
<!-- FIN pagina 1 -->

</body>
</html>