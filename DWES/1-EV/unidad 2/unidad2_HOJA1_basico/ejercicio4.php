<!--
4.- Cree un fichero de PHP que permita conocer toda la información de una
salida por pantalla similar a la siguiente:
Información de la variable “nombre”: string (4) “Juan”
Contenido de la variable: Juan
Después de asignarle un valor nulo: NULL
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		$variable ="Lidia";
		
		echo "<p>Información de la variable \"variable\" :";
		var_dump($variable);
		echo "</p>";
		echo "<p>Contenido de la variable: ", $variable ," </p>";
		$variable = null;
		echo "<p>Después de asignarle un valor nulo: ",gettype($variable)," </p>";
	?>

</body>
</html>