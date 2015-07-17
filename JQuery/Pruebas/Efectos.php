<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		$(document).on('ready', function(){
			var elem= $('#caja1');
			$('#b1').click(function(){
				//elem.show(); //Mostrar elemento
				//elem.slideDown();//cortina hacia arriba
				//elem.fadeIn();// aparece 
				elem.slideToggle();//si esta oculto aparece, y si esta desaparece
				//se puede poner tiempo (en milisegundos o slow-fast) elem.fadeOut('fast');
				//para estandarizar una propiedad de tiempo
				$.fx.speeds.lento=3000; //  elem.fadeOut('lento');
			});
			$('#b2').click(function(){
				//elem.hide();//Ocultar elemento
				//elem.slideUp();//cortina hacia abajo
				//elem.fadeOut();// aparece 
				elem.slideToggle();

			});
		});		
	</script>
	<style>
		body, html{
			background: #000;
		}
		#caja1{
			background: #D8A736;
			margin: 5% auto;
			display: block;
			height: 80px;
			width: 400px;
		}
		.cambiar{
			background: #38CED6;
			color:#000;
			width: 300px;
			margin:0.5% auto;
			display:block;
		}
	</style>
</head>
<body>
	<div id="caja1"></div>
	<button id="b1" class='cambiar'>Mostrar</button>
	<button id="b2" class='cambiar'>Ocultar</button>
</body>
</html>