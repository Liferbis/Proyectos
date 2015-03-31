<html>
<head>
	<title>Ejercicio 5 Lidia</title>
</head>
<body>
	<?php 
	$fecha=date("j-m-Y h:i:s");
	echo " <h1> La fecha actual es: <small>".$fecha."</small></h1>";
	$nuevafecha=strtotime("+ 27 hour", strtotime($fecha));
	$nuevafecha=date("j-m-Y h:i:s",$nuevafecha);
	echo " <h1> Y si le sumo 27 horas: <small>".$nuevafecha."</small></h1>";

	?>
</body>
</html>