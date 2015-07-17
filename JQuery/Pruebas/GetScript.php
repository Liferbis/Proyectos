<!DOCTYPE html>
<html lang="es">
<head>
	<title>PruebasVarias</title>
	<meta chaeset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		$(document).on('ready', function(){
			$.getScript('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', function(){
				$('#ejemplo').slideUp(3000, 'easeOutBounce');
			})
		});	
	</script>
	<style>

		#ejemplo{
			height: 200px;
			width: 400px;
			background:#000;
			color:#FFF;
			font-size: 50px;
		}
	</style>
</head>
<body>
	<div id="ejemplo">TEXTO PRUEBA!</div>
</body>
</html>