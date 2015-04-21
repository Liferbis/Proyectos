<html>
<head>
	<title>Ejercicio 2 Lidia</title>
</head>
<body>
	<h1>Numeros capicua entre el 100 y el 999</h1>
	<?php
	for ($i=100; $i <= 999 ; $i++) { 
		$numero=$i;
		$numero2 = strrev($numero); 
		if($numero==$numero2) {
			echo "<h3>El numero $i SI es capicua</h3>";
		 }//else{
		// 	echo "<h3>El numero $i NO es capicua</h3>";
		// }
	}

?>
</body>
</html>