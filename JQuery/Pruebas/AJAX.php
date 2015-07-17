<!DOCTYPE html>
<html lang="es">
<head>
	<title>PruebasVarias</title>
	<meta chaeset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- , maximun-scle=1 NO PERMITE HACER ZOOM!!! -->
	<script src="../libreria jquery4php/source-showcase/showcase/jquery4php-assets/js/jquery-1.8.2.min.js"></script>
	
	
	<script>
		$(document).on('ready', function(){
			var pet = $('#main form').attr('action');
			var met = $('#main form').attr('method');
			var nom, m, msj;
			$('#main form').on('submit', function(e){
				e.preventDefault();
								
				$.ajax({
				 	//antes de que se envie!!
				 	beforeSend: function(){
				 		//$('#status').spin({radius:3, width:2, height:2, length:4});
				 		nom = document.fo.nombre.value;
				 		m = document.fo.mail.value;
				 		msj = document.fo.mensaje.value;
				 	},
				 	url: pet,
				 	type: met,
				 	//data: $('#main form').serialize()
				 	//o bien...
				 	data: {nombre: nom, mail: m, mensaje: msj},
				 	success: function (info){
				 		//escritura de datos si todo fue bien!!
				 		$('#solucion').html("<div id='solucion' class='form-group'><h1>Nombre: " + nom + " </h1><h1>Mail: " + m + "</h1><h1>Mensaje: " + msj + "</h1></div>" );
				 		console.log(info);
				 	},
				 	error: function (jqXHR, estado, error){
				 		console.log(estado);
				 		console.log(error);
				 	},
				 	complete: function (jqXHR, estado){
				 		console.log(estado);
				 	},
				 	timeout: 10000
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
			<input type="text" name="nombre" class="form-control" required  placeholder="Nombre...">
			<input type="email" name="mail" class="form-control" required placeholder="Correo...">
			<textarea name="mensaje" placeholder="Mensaje..." required></textarea>
			<div style="display:block; width:60%; margin: 0 auto" class="form-group">
				<input type="submit" name="send" value="Enviar"/>
				<!--<div id="status"></div>-->
			</div>
			<div id="solucion"></div>
		</form>
	</div>
</body>
</html>