<html>
<head>
	<title>Ej5</title>
</head>
<body>
	<h1>Genera 10 valores de la siguiente serie 1/2, 2/4, 3/8, 4/16... </h1>
	<p>1/2</p>
	<?php 
		$div=2;
		for($numero=2; $numero<=15; $numero++){
			$div=$div*2;
			echo "<p>".$numero."/".$div."</p>" ;			
		}	
	?>

</body>
</html>