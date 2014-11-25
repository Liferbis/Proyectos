<!--
2.- Cree un fichero PHP que muestre por pantalla el mensaje “Segundo
ejercicio: visualización del contenido de variables”. A continuación, defina
dos variables $nombre y $edad y asígnele un valor correcto. Después, cree
una sentencia que muestre un mensaje que contenga dichas variables similar
a “Mi nombre es valor_de_la_ variable_$nombre y mi edad es
valor_de_la_variable_$edad”. inserte un comentario encima de cada
variable explicando el significado del valor que almacenará cada variable.
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		echo "<p>Segundo ejercicio: visualización del contenido de variables</p>";

		$mi_nombre ="Lidia";
		$mi_edad ="23";

		echo "Mi nombre es valor de la variable mi_nombre es ", $mi_nombre, " y $mi_edad es
valor de la variable edad = ",$mi_edad ;
	?>

</body>
</html>