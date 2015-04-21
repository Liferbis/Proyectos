<html>
<head>
	<title>Ejercicio 4 Lidia</title>
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