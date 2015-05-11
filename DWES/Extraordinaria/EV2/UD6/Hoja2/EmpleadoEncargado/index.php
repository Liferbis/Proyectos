<?php 
	require_once "Encargado.php";
 ?>
<html>
<head>
	<title>Empleado-Encargado</title>
</head>
<body>
	<h1 style="color:red">Creamos un nuevo Empleado :Juan -> Sueldo-900€</h1>
	<h5 style="color:red">//- $j= new Empleado("Juan", 900) -//</h5>
	<h5 style="color:red">//- $j->GetNombre() -//</h5>
	<h5 style="color:red">//- $j->GetSueldo() -//</h5>
	<?php 
		$j= new Empleado("Juan", 900);

		echo "<h3 style='color:red'>Nombre: ".$j->GetNombre()."</h3>";
		echo "<h3 style='color:red'>Sueldo: ".$j->GetSueldo()."</h3>";
	 ?>

	<h1 style="color:DarkViolet">Creamos un nuevo Empleado :Lidia -> Sueldo(de empleado)-900€</h1>
	<h5 style="color:DarkViolet">//- $L= new Encargado("Lidia", 900) -//</h5>
	<h5 style="color:DarkViolet">//- $L->GetNombre() -//</h5>
	<h5 style="color:DarkViolet">//- $L->GetSueldo() -//</h5>
	<?php 
		$L= new Encargado("Lidia", 900);

		echo "<h3 style='color:DarkViolet'>Nombre: ".$L->GetNombre()."</h3>";
		echo "<h3 style='color:DarkViolet'>Sueldo: ".$L->GetSueldo()."</h3>";
	 ?>
</body>
</html>