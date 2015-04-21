<html>
<head>
	<title>Ejercicio 4 Lidia</title>
</head>
<body>
	<h1>Numero de fibonacci</h1>
	<?php

	$a=0;
	$b=1;
	$c=$a+$b;
	echo $c." ,"; 
	for($i=0; $i<=100; $i++){
		echo "</br>".$c." , ";
		$a=$b;
		$b=$c;
		$c=$a+$b;
		if($i==100){
			echo "....";
		}			


		
	}

	?>
</body>
</html>