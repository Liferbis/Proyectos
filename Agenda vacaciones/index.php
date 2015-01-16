<?php 
	require_once "calendario.php";
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejemplo</title>
	<meta charset="utf-8">
	<link href="estil.css" rel="stylesheet">
</head>

<body>
<h1>Ejemplo de un simple calendario en PHP</h1>
<table id="calendar"> 
	<?php 
		$hoy=new Calendario();
		$hoy->getTodosMeses();
	 ?>
	</tr>
</table>
</body>
</html>