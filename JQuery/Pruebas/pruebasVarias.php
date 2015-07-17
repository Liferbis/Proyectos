<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		var seleccion;
		$(document).on('ready', function(){
			//asignamos a la variable global el valor de la clase del div: 
			seleccion = $(".miDiv");
					
			//si existe la clase
			if(seleccion.length)
					//en el apartado de consola te miestra el resultado
				console.log('Existen: '+ seleccion.length);
			else
				console.log('No Existen');

			//escribe en todas las etiquetas  div!!
			$('div').text("Hola esto es una prueba");

			//escribe en la clase que no se llame cl1:
			seleccion.not('.cl1').text("Este elemento no tiene la clase  .cl1");
			
			//escribe en la donde se encuentre la etiqueta "p" :
			seleccion.has('p').text("Este elemento tiene una etiqueta <p> en su contenido");
		});
	</script>
</head>
<body>
	<div class="miDiv cl1">
		<p></p>			
	</div>
	<div class="miDiv">
		<span></span>		
	</div>
</body>
</html>