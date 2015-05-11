<?php 
	require_once "CuentaCorriente.php";
	require_once "CuentaAhorro.php";
 ?>
<html>
<head>
	<title>Cuenta-CuentaCorri-CuentaAhorr</title>
</head>
<body>
	<h1 style="color:red">Creamos una Cuenta normal</h1>
	<?php 
		$c=new Cuenta("1234.567.0987", "Lidia", 1000);
		echo $c->mostrar()."</ul>";
	 ?>

 	<h1 style="color:blue">Creamos una Cuenta Corriente</h1>
	<?php 
		$c=new CuentaCorriente("1234.567.0987", "Lidia", 1000, 30);
		echo $c->mostrar();
	 ?>

 	<h1 style="color:DarkViolet">Cuenta Ahorro</h1>
	<?php 
		$c=new CuentaAhorro("1234.567.0987", "Lidia", 1000,20 ,2);
		echo $c->mostrar();
		$c->aplicaInteres();
		echo "<ul><ul><h3 style='color:DarkViolet'>Despues de aplicar el interes</h3>".$c->mostrar();
	 ?>


</body>
</html>