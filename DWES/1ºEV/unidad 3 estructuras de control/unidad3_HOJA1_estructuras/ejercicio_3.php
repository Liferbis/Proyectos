<html>
<head>
	<title>Ej3</title>
</head>
<body>
	<h1>Numeros que cumplen que suma sus digitos es igual al producto de los mismos </h1>
	<?php 
		for($numero=100; $numero<=999; $numero++){
			
			
			$uno=substr($numero, 0,1);
			$dos=substr($numero, 1,1);
			$tres=substr($numero, 2,1);

			$suma=$uno+$dos+$tres;

			$mult=$uno*$dos*$tres;

			if($suma==$mult) {
				echo "<p>--->".$numero.": </p>";
				echo "<p>-Suma: ". $uno."+".$dos."+".$tres."=".$suma."</p>";
				echo "<p>-Multiplicacion: " .$uno."*".$dos."*".$tres."=".$mult."</p>";
			}
			
		}
	?>

</body>
</html>