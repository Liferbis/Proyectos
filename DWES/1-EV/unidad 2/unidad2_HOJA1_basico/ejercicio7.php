<!--
7.- Realizar un programa que intercambie el valor de dos variables.
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		$a =8;
		$b=3;
		echo "<p>A= ",$a," B=",$b," </p>";
		$aux=$a;
		$a=$b;
		$b=$aux;		
		echo "<p>A=",$a, " B=",$b," </p>" ;
				
	?>

</body>
</html>