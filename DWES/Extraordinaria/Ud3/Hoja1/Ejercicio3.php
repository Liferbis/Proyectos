<html>
<head>
	<title>Ejercicio 3 Lidia</title>
</head>
<body>
	<h1>Numeros entre el 100 y el 999 que sa suma de sus digitos sea igual al producto de los mismos</h1>
	<?php
	for ($i=100; $i <= 999 ; $i++) { 		
		$uno=substr($i, 0,1);
		$dos=substr($i, 1,1);
		$tres=substr($i, 2,1);

		$suma=$uno+$dos+$tres;

		$mult=$uno*$dos*$tres;

		if($suma==$mult) {
			echo "<ul>--->".$i.": ";
			echo "<li>-Suma: ". $uno."+".$dos."+".$tres."=".$suma."</li>";
			echo "<li>-Multiplicacion: " .$uno."*".$dos."*".$tres."=".$mult."</li></ul>";
		}
	}

?>
</body>
</html>