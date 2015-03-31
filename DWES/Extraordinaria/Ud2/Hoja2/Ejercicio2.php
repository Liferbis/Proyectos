<html>
<head>
	<title>Ejercicio 2 Lidia</title>
</head>
<body>
	<?php 
			$fecha=date("j-m-Y");
			echo " <h1> La fecha actual es: ".$fecha."</h1>";
			$nuevafecha=strtotime("- 5 day", strtotime($fecha));
			$nuevafecha=date("j-m-Y",$nuevafecha);
			echo " <h1> Y si le resto 5 dias: ".$nuevafecha."</h1>";
		
	?>
</body>
</html>