<html>
<head>
	<title>Ejercicio 5 Lidia</title>
</head>
<body>
	<ul>
	<?php 

		$temporal ="Juan";
		echo "<li>". gettype($temporal)."</li>";
		$temporal =3.14;
		echo "<li>". gettype($temporal)."</li>";
		$temporal =false;
		echo "<li>". gettype($temporal)."</li>";
		$temporal =3;
		echo "<li>". gettype($temporal)."</li>";
		$temporal =null;
		echo "<li>". gettype($temporal)."</li>";
	?>
	</ul>
</body>
</html>