<html>
<head>
	<title>Ejercicio 10 Lidia</title>
</head>
<body>
	<h1>Numeros primos desde 3 hasta 9999</h1>
	
	<?php
		for($i=3;$i<9999;$i++){
			$c=0;
        	for ($k=2; $k < $i ; $k++) { 
        		if($i%$k==0){
        			$c++;
				}
			}	
			if($c==0){
				echo "<br>Número:->".$i;
			}
		}

	?>
</body>
</html>