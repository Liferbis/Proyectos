<html>
<head>
	<title>Ej9</title>
	<meta charset="UTF-8" />
</head>
<body>
	<h1>Mostrar los siguientes valores:</h1>
	<h2 style="color:blue;">
		<?php 
			for ($i=10; $i>=1; $i--){
				for ($j=$i; $j>=1; $j--){
					echo $j." ";
				}	
					echo "</br>";
				
			}
		?>
	</h2>
</body>
</html>