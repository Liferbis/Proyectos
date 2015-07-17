<!DOCTYPE html>
<html>
<head>
	<title>PruebasVarias</title>

	<script src="../libreria jquery4php/source-showcase/showcase/jquery4php-assets/js/jquery-1.8.2.min.js"></script>
	<!--
		PARA DAR COLORES  ALA ANIMACION TENEMOS LA SIGUIENTE LIBRERIA
	-->
	<script src="../libreria jquery4php/source-showcase/showcase/jquery4php-assets/js/jquery-color-animation.js"></script>
	<script>
		$(document).on('ready', function(){
			$('#caja1').on({
				"mouseover": function(){
					$('#caja1').animate({
						marginBottom: 100,
						backgroundColor:'#D8A736'
						}
						,1500)
					
				,"mouseout": function(){
					$('#caja1').animate({
						marginBottom: 0,
						backgroundColor:'#ADB825'
						},1500)
										
				}
			})
		});
	</script>
	<style>
		body, html{
			padding: 100px;
		}
		div{
			margin: 0 auto;
			display: block;
			height: 80px;
			width: 400px;
		}
		#caja1{
			background: #D8A736;
			margin-bottom: 100px;
			
		}
		#caja2{
			background: #86651A;
			
		}
	</style>
</head>
<body>
	<div id="caja1"></div>
	<div id="caja2"></div>
</body>
</html>