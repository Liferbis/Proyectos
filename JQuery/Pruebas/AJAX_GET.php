<!DOCTYPE html>
<html lang="es">
<head>
	<title>PruebasVarias</title>
	<meta chaeset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- , maximun-scale=1 NO PERMITE HACER ZOOM!!! -->
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		$(document).on('ready', function(){
			//SI QUEREMOS RECIBIR DATOS!!!
			$.get('AJAX_GET_GET.php', function(data){
				//aunque el archivo sea php, se escribe html
				$('#receptor').html(data);
			});
			//SI QUEREMOS MANDAR DATOS!!!
			$.get('AJAX_GET_GET.php',{nombre: "Lidia Fernandez"}, function(data){
				//aunque el archivo sea php, se escribe html
				$('#receptor').html(data);
			});
		});	
	</script>
	
</head>
<body>

	<div id="receptor"></div>
</body>
</html>