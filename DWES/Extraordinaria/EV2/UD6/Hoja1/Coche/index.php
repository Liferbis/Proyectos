<?php 
	include_once ('coche.php');
?>
<html>
<head>
	<title>Coche_Lidia</title>
</head>
<body>
	<h1>Creamos un nuevo coche con matricula S-4327-AK y velocidad de 10</h1>
	<h5>//- $rad3= new coche("S-4327-AK", 10) -//</h5>
	<h5>//- $rad3->radio=3 -//</h5>
	<?php 
		$rad3= new coche("S-4327-AK", 10);

		echo "<h5>".$rad3->mostrar()."</h5>";
	 ?>
	 <h1>Aceleramos 100</h1>
	 <h5>//- $rad3->acelera(100) -//</h5> 
	<?php 
		echo "<h5>La velocidad es: ".$rad3->acelera(100)."</h5>";
	 ?>
	 <h1>Aceleramos 20</h1>
	 <h5>//- $rad3->acelera(20) -//</h5> 
	 <?php 
		echo "<h5>La velocidad es: ".$rad3->acelera(20)."</h5>";
	 ?>
	 <h1>Deceleramos 150</h1>
	 <h5>//- $rad3->acelera(150) -//</h5> 
	 <?php 
		echo "<h5>La velocidad es: ".$rad3->decelera(150)."</h5>";
	 ?>
	 <h1> Mostramos de nuevo</h1>
	<?php 
	 echo "<h5>".$rad3->mostrar()."</h5>";
	?>

</body>
</html>