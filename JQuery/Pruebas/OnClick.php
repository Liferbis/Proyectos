<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		var seleccion;
		$(document).on('ready', function(){
			//funcion on click
				$(document).on("click", function(){
					//si no existe añades una clase
					$("#test").addClass("test");
					
					//si existe elimina la clase
					$("#test").removeClass("test");
	
					//si tiene la clase, la borra haciendo un remove, YY si no tiene la clase la pone
					$("#test").toggleClass("test");
	
					//jugando con clases y textos
					if($("#test").hasClass("test"))
							$("#test").text("Tengo la class='text'");
					else
							$("#test").text("NO tengo la class='text'");
				})
		});
	</script>
</head>
<body>
	<div id="test">Click on me</div>
</body>
</html>