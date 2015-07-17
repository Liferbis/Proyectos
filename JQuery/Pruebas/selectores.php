<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		var seleccion;
		$(document).on('ready', function(){
			//devuelve una alerta con el texto plano quue existe dentro de las etiquetas <p>
			seleccion = $('#parrafo').html;
			alert(seleccion);

			//asigna una clase a una etiqueta con un id (id="prueba")
			$('#prueba').attr("class", "ejemplo");

			//sirve para obtener el id 
			seleccion = $('#prueba').attr("id");
			alert(seleccion);

			//si queremos que el nombre de la clase lo de una funcion
			$("#prueba").attr("class", function(){
				var cadena = "Hola_Mundo";
				return cadena;
			});
			var clase = $("#prueba").attr("class");
			alert(clase);
		});
	</script>
</head>
<body>
	<p id="parrafo"><strong>Hola JQuery</strong></p>
	<div id="prueba"> </div>
</body>
</html>