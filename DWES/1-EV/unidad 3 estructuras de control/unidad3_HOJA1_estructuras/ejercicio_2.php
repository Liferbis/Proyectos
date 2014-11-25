<html>
<head>
	<title>Ej1</title>
</head>
<body>
	<h1>Numeros capicua del 100 al 999</h1>
	<?php 
		for($numero=100; $numero<=999; $numero++){
			$numero2 = strrev($numero); 
			if($numero==$numero2) {
				echo "<p>".$numero."</p>";
			}
			
		}
	?>

</body>
</html>