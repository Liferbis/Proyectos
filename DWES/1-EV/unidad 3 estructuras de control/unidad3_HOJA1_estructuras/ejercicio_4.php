<html>
<head>
	<title>Ej4</title>
</head>
<body>
	<h1>Fibonacci hasta 100</h1>
	<?php
		$a=0;
		$b=1;
		$c=$a+$b; 
		for($i=0; $i<=100; $i++){
			echo "</br>".$c." , ";
			$a=$b;
			$b=$c;
			$c=$a+$b;			
		}	
	?>

</body>
</html>