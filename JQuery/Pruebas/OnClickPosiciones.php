<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	
	<script>
		var seleccion;
		$(document).on('ready', function(){
			$('button').on('click', function(){
				//el primer elemento se convierte en el último
				$('ol li:first').appendTo('ol:first');
				//Otra forma de ponerlo:
				$('ol:first').append($('ol li:first'));
				
				//Poner el Ultimo el primero
				$('ol li:last').prependTo('ol:first');
				//Otra forma de ponerlo:
				$('ol:first').prepend($('ol li:last'));

				//Metodo isertar despues de...(div id='e1')
				$('ol li:first').insertAfter('#e1');
				//Otra forma de ponerlo:
				$('#e1').after($('ol li:first'));

				//Metodo isertar antes de...
				$('ol li:first').insertBefore('#e1');
				//Otra forma de ponerlo:
				$('#e1').before($('ol li:first'));

				//Crear un clon 
				var clon = $('ol li:first').clone();
				clon.insertBefore('#e1');
				//Otra forma de ponerlo: 
				$('#e1').before(clon);

				//Insertar texto antes (Before) o despues (After) de la etiqueta
				var texto = $('<p>Hola Mundo!!</p>');
				texto.insertBefore('#e1');
				//Otra forma de ponerlo: 
				$('#e1').before(texto);
				//si quieres hacerlo dentro de la etiqueta especifica:
				texto.appendTo('#e1');
				$('#e1').append(texto);

				//Borrar elemento
				$('ol li:last').remove();
			})
		});
	</script>
	<style>
			body, html{
				background: #000;
				color:#FFF;
				margin: 0;
				padding: 0;
			}

			header{
				display: block;
				margin: 0 auto 50px auto;
				width: 365px;
			}

			ol{
				display: block;
				width: 500px;
				margin: 0 auto;
			}

			ol, li{
				background: #088A29;
				margin: 5px auto;
				height: 30px;
				width: 100%;
			}

			button{
				background: #EAFA1F;
				display: block;
				margin: 150px auto 50px auto;
				font-size: 15px;
				font-weight: bold;
				width: 100px;
				height: 50px;
			}

			div{
				background: #FE2E64;
				height: 50px;
				display: block;
				width: 400px;
				margin: 2px auto;
			}
		</style>
</head>
<body>
	<header>
		<img src="include/logo.png" alt="GC">
	</header>
	<ol>
		<li>Elemento 0</li>
		<li>Elemento 1</li>
		<li>Elemento 2</li>
		<li>Elemento 3</li>
	</ol>

	<button id="test">Ejecutar</button>

	<div id="e1">
		<p>Div 1</p>
	</div>

	<div id="e2">
		<p>Div 2</p>
	</div>
</body>
</html>