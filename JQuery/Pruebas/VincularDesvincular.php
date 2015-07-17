<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		$(document).on('ready', function(){
			//vinculacion de eventos con cursor

			//pasar el raton por encima
			/*$('#caja1').mouseover(function(){
				$(this).css('background', "#3737FF");
				$(this).css('color', "#FFF");
				$(this).css('font-weight', "bold");
				$(this).css('font-size', "36px");
			})

			//al dejar de pasar el raton por encima
			$('#caja1').mouseout(function(){
				$(this).css('background', "#B7B7FF");
				$(this).css('color', "#000");
			})*/

			/*------------------------*/
			//  FORMA DE PONERLO CON .on 
			//pasar el raton por encima
			/*$('#caja1').on("mouseover", function(){
				$(this).css('background', "#3737FF");
				$(this).css('color', "#FFF");
				$(this).css('font-weight', "bold");
				$(this).css('font-size', "36px");
			})

			//al dejar de pasar el raton por encima
			$('#caja1').on("mouseout", function(){
				$(this).css('background', "#B7B7FF");
				$(this).css('color', "#000");
			})*/

			//---------------------------------------------//
			// VINCULACION DE LAS FUNCIONES JUNTAS //
			//LA CORRECTA!!!! 

			$('#caja1').on({
				"mouseover": function(){
					$(this).css('background', "#3737FF");
					$(this).css('color', "#FFF");
					$(this).css('font-weight', "bold");
					$(this).css('font-size', "36px");
				},
				"mouseout": function(){
					$(this).css('background', "#B7B7FF");
					$(this).css('color', "#000");
				}
			})

		});
	</script>
	<style>
		body, html{
			background: #000;
		}
		div{
			margin: 0 auto ;
			background: #B7B7FF;
			color:#000;
			width: 500px;
			height: 300px;
			font-size: 36px;
			text-align: center;
			
		}
	</style>
</head>
<body>
	<div id="caja1"><p></p>Esto es una caja de texto!!</div>
</body>
</html>