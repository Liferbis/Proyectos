<html>
<head>
	<title>HOJA 2</title>
</head>
<body>
	<?php 
		$fecha=date("j-m-Y");
		echo "hoy es: ".$fecha;
		//strtotome devueve los segundos desde 1 enero de 1970
		$tfecha=strtotime("-5 day", strtotime($fecha));
		$tfecha=date("j-m-Y",$tfecha);
		echo " y si le resto 5 dias: ".$tfecha;	

	?>
</body>
</html>