<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		var array;
		$(document).on('ready', function(){
			$('button').on('click', function(){
				//array
				array = ['Dxvtuts', 'CodigoFacilito', 'LidiaFernandez'];
				$.each(array, function(indice, elemento){
					if(array[indice] == 'LidiaFernandez')
						return 'true';

					console.log('Indice: ' + indice + ' Valor del elemento: ' + elemento);
				})

				//devuelve el elemento si existe en el array
				if($.inArray('LidiaFernandez', array) !== -1)
					console.log(array[$.inArray('LidiaFernandez', array)]);

				//quitar espacios en blanco del principio y del final de la cadena de texto
				var s='     Ho    la   mun   do     ';
				console.log("Texto antes de la eliminacion de espacion: '" + s + "'");
				console.log("Texto despues de la eliminacion " + s.trim());
			})
		});
	</script>
	<style>
		body, html{
			background: #000;
			color: #000;
			font-weight: bold;
			margin: 0;
			padding: 0;
		}

		header{
			display: block;
			margin: 0 auto 50px auto;
			width: 365px;
		}

		button{
			display: block;
			margin: 0 auto ;
			width: 80px;
		}

		div{
			background: #FFF;
			height: 50px;
			display: block;
			width: 400px;
			margin: 2px auto;
		}
	</style>
</head>
<body>
	<header>
		<img src="logo.png" alt="GC"/>
	</header>

	<button id="test">Ejecutar</button>

	<div id="e1">Metodos utilitarios</div>
</body>
</html>