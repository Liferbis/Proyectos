<?php 
	include_once ('circulo.php');
?>
<html>
<head>
	<title>Circulo_Lidia</title>
</head>
<body>
	<h1>Creamos un nueco circulo con radio 3</h1>
	<h5>//- $rad3= new circulo(3) -//</h5>
	<h5>//- $rad3->radio=3 -//</h5>
	<?php 
		$rad3 = new circulo(3);
		$rad3->radio=3;
		echo "<h5>El radio es: ".$rad3->radio."</h5>";
	 ?>
	 <h1>Cambiamos el radio del circulo a un radio 7</h1>
	 <h5>//- $rad3->radio=7 -//</h5> 
	<?php 
		$rad3->radio=7;
		echo "<h5>El radio es: ".$rad3->radio."</h5>";
	 ?>
</body>
</html>