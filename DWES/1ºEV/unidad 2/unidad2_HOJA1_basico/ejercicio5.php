<!--
5.- Cree un fichero PHP en el que se asignen los siguientes valores a una
variable $temporal: “Juan”; 3,14; false; 3; null. Muestre por pantalla el tipo
que se le asigna a la variable utilizando la función gettype().
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		$temporal ="Juan";
		echo "</p>". gettype($temporal)."</p>";
		$temporal =3.14;
		echo "</p>". gettype($temporal)."</p>";
		$temporal =false;
		echo "</p>". gettype($temporal)."</p>";
		$temporal =3;
		echo "</p>". gettype($temporal)."</p>";
		$temporal =null;
		echo "</p>". gettype($temporal)."</p>";
	?>

</body>
</html>