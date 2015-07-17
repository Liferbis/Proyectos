<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		var array;
		$(document).on('ready', function(){
			$('ul li').each(function(indice, elemento){
				$.data(elemento, 'posicion', indice);
			});
			$('ul li').each(function(indice, elemento){
				console.log($.data(elemento, 'posicion'));
			});
		});
	</script>
	
</head>
<body>
	<ul>
		<li>uno</li>
		<li>dos</li>
		<li>tres</li>
	</ul>
</body>
</html>