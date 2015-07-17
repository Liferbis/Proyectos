<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		var seleccion;
		$(document).on('ready', function(){
			//alerta cuando pulsas un enlace y se te abre una nueva pestaña
			$('a').on("click", function(e){
				e.preventDefault();
				var link = $(this).attr('href');
				alert("Usted está saliendo de nuestro sitio");
				location.href = link;
			});
		});
	</script>
</head>
<body>
	<a href="http://www.codigofacilito.com" >Enlace</a>
</body>
</html>