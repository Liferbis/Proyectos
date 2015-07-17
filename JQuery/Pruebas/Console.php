<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		var seleccion;
		$(document).on('ready', function(){
			//debe ser el inmediato siguiente 
			console.log($('#primero').next().text());

			//Comprobacion de etiqueta
			console.log($('#test').parent().attr('id'));

			//Seleccion de hijo
			console.log($('#padre').children().attr('id'));

			//Seleccion de hermanos todos los 'li' TODO JUNTO
			console.log($('#primero').siblings());

			//Seleccion de hermanos todos los 'li' con un foreach!!
			//elemento= a lo que contiene
			//index= el numero!!
			console.log($("ul li").each(function(index,elemento){
				console.log("Este elemento numero " + index + " contiene este texto: " + $(elemento).text());
			}))
		});
	</script>
</head>
<body>
	<div>
		<article id="padre">
			soy el padre
			<div id="test">soy el hijo</div>
		</article>
	</div>
	<ul>
		<li id="primero">soy el primero</li>
		<li>soy el segundo</li>
		<li>soy el tercero</li>
	</ul>
</body>
</html>