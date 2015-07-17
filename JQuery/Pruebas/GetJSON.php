<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta chaeset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- , maximun-scale=1 NO PERMITE HACER ZOOM!!! -->
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script>
		$(document).on('ready', function(){
			$('#main form').on('submit', function(e){
				e.preventDefault();
				var info = $('#main form').serialize();
				$.getJSON('GetJSON_externo.php', info, function(resp){
					console.log(resp);
					$.each(resp, function(c,v){ //c=clave v=valor
						console.log(c + ' => ' + v );
					})
				})				
				
			})
		});			
	</script>
	<style>
		*{margin:0; padding: 0;}
		body, html{
			font-family: Myriad Pro, Arial;
			background: #111a29;
			color: #FFF;
		}
		#main{
			display: block;
			margin: 0 auto;
			width: 400px;
			height: 700px;
		}
		#main h1{
			display: block;
			text-align: center;
			width: 100%;
		}
		::selection{
			background:#e04c22;
			color:#FFF; 
		}
		#main #solucion{
			display: block;
			margin: 0 auto;
			margin-top: 30px;
			width: 80%;
			color: #0F0;
		}
		form{
			display: block;
			width: 100%;
		}
		input,textarea{
			font-family: Myriad Pro, Arial;
			border: 0;
			color: #FFF;
			background: #1f61ad;
			outline:0;
			border-radius: 1px;
			font-size: 20px;
			margin: 10px auto;
			width: 95%;
			display: block;
			max-height: 100px;
		}
		textarea{
			max-width: 95%;
			height: 100px;
		}
		input[type=submit]{
			display: inline-block;
			vertical-align: middle;
			height: 25px;
			width: 80%;
			cursor: pointer;
		}

		#status{
			display: inline-block;
			vertical-align: middle; 
			width: 20px;
			height: 20px;
		}
		#status img{
			width: 20px;
			height: 20px;
		}
	</style>
</head>
<body>
	<div id="main">
		<h1>Formulario de contacto</h1>
		<form action="" method="POST" name="fo">
			<input type="text" name="nombre" class="form-control"   placeholder="Nombre...">
			<input type="email" name="mail" class="form-control"  placeholder="Correo...">
			<textarea name="mensaje" placeholder="Mensaje..." ></textarea>
			<div style="display:block; width:60%; margin: 0 auto" class="form-group">
				<input type="submit" name="send" value="Enviar"/>
				<!--<div id="status"></div>-->
			</div>
			<div id="solucion"></div>
		</form>
	</div>
</body>
</html>