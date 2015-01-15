<?php 
	include_once('persona.php');
 ?>
<html>
	<head>
		<title>Presona</title>
	</head>
	<body>
		<h1>Persona 1</h1>
		<?php 
			$p1=new Persona("Lidia", 21);
			$p1->mostrar();
			echo "<br>Personas:";
			$p1->per();
		 echo "<h1>Persona 2</h1>"; 
			$p2=clone ($p1);
			$p2->mostrar();
			echo "<br>Personas:";
			$p2->per();
		 ?>
	</body>
</html>