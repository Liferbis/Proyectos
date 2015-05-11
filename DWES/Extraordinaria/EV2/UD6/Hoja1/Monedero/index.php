<?php 
	include_once ('monedero.php');
?>
<html>
<head>
	<title>Monedero_Lidia</title>
</head>
<body>
	<h1 style="color:red">Creamos un nuevo monedero saldo inicial 100 €</h1>
	<h5 style="color:red">//- $mon1= new monedero(100) -//</h5>
	<h5 style="color:red">//- $mon1->mostrar() -//</h5>
	<?php 
		$mon1= new monedero(100);

		echo "<h3>".$mon1->mostrar()."</h3>";
	 ?>

	<h1 style="color:red">Introducimos 100€ más y mostramos</h1>
	<h5 style="color:red">//- $mon1->MeteDi($mon) -//</h5>
	<h5 style="color:red">//- $mon1->mostrar() -//</h5> 
	<?php 
		$mon1->MeteDi(100);
		echo "<h3>".$mon1->mostrar()."</h3>";
	?>

	<h1 style="color:red">Sacamos 111€</h1>
	<h5 style="color:red">//- $mon1->SacaDi($mon) -//</h5> 
	<?php 
		$mon1->SacaDi(111);
		echo "<h3>".$mon1->mostrar()."</h3>";
	?>

	<h1 style="color:blue">Creamos un nuevo monedero saldo inicial 50 €</h1>
	<h5 style="color:blue">//- $mon2= new monedero(100) -//</h5>
	<h5 style="color:blue">//- $mon2->mostrar -//</h5>
	<?php 
		$mon2= new monedero(50);

		echo "<h3>".$mon2->mostrar()."</h3>";
	 ?>

	<h1 style="color:DarkViolet"> Mostramos el numero de monederos</h1>
	<?php 
		echo "<h3 'style=color:DarkViolet' >".$mon1->monederos()."</h3 >";
	?>
	 
	<h1 style="color:DarkViolet"> Quitamos el monedero 1 (rojo) y mostramos el numero de monederos</h1>
	<?php 
		$mon1=null;
		echo "<h3 'style=color:DarkViolet' >".$mon2->monederos()."</h3 >";
	?>

</body>
</html>