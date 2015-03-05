<?php 
	$cliente=new SoapClient("http://localhost/proyectos/DWES/2-EV/Fernandez_Lidia/Ejercicio%202/MediaMaratonWebService.xml");
try{
	$Trunner=$cliente->getTiempo('33333333P');
	$run=$cliente->getMejor();
}catch(SoapFault $e){
	print $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EJERCICIO 3</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="text-center">
			<h1>EJERCICIO 3</h1>
			<ul>
				<li>Mostrar el 
					<a target='_blank' href='../Ejercicio 2/MediaMaratonWebService.xml'>
					 WSDL.xml</a>
				</li>
			</ul>
			<hr>
			<br>
			El runner con el numero de dni 3333333P es: 
				<?php
        			echo $Trunner;
        		?>
			<ul>
				<?php  
					var_dump($run);
					foreach ($run as $r){ 
				?>
				<li>Nombre:
					<?php echo $r->nombre; ?>
	 				<ul>	 					
	 					<li>Dni: 
	 						<?php echo $r->dni ;?>
	 					</li>
	 					
	 					<li>Sexo: 
	 						<?php echo $r->sexo; ?>
	 					</li>
	 					
	 					<li>Talla de Camiseta: 
	 						<?php echo $r->talla; ?>
	 					</li>
	 					
	 					<li>Dorsal:
	 						<?php echo $r->dorsal; ?>
	 					</li>
	 					
	 					<li>Tiempo: 
	 						<?php 
	 							$t=($r->tiempo)/60;
	 							echo $t; ?> 
	 						minutos
	 					</li>
	 				</ul>
	 			</li>
	 		</ul>	
	 		<br> 
			<?php } ?>
			
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>





