<html>
<head>
	<title>Ejercicio 5 Lidia</title>
</head>
<body>
	<h1>Genera valores de la siguiente serie 1/2, 2/4, 3/8, 4/16....</h1>
	<?php
	
	$i=1;
	$k=2;
	echo $i."/".$k." ,";
	$i++;
	while( $i<=20){
		
		$k=$k*2;
		echo "</br> $i /".$k." , ";
		if($i==20){
			echo "....";
		}
	$i++;	
	}

	?>
</body>
</html>