<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		var seleccion;
		$(document).on('ready', function(){
			//asignamos a la variable global el valor de la etiqueta li:
			seleccion = $('li');

			//escribimos en la primera etiqueta li
			seleccion.first().html('<strong>Soy el elemento 0 </strong>');

			//escribimos en la segunda etiqueta li
			seleccion.eq(2).html('<strong>Soy el elemento 2 </strong>');
		});
	</script>
</head>
<body>
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul> 
</body>
</html>