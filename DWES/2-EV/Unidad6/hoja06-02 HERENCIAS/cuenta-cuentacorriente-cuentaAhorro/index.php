<?php 
	require_once "cuenta.php";
	require_once "cuentaCorriente.php";
	require_once "cuentaAhorro.php";
 ?>
<html>
<head>
	<title>cuentas</title>
</head>
<body>
	<h1>Cuenta normal</h1>
<?php 

	$c=new Cuenta("2064.***.****", "Lidia", 1000);
	$c->mostrar();
 ?>
 	<h1>Cuenta Corriente</h1>
<?php 

	$c=new cuentaCorriente("2064.***.****", "Lidia", 1000, 300);
	$c->mostrar();
 ?>
 	<h1>Cuenta Ahorro</h1>
<?php 

	$c=new cuentaAhorro("2064.***.****", "Lidia", 1000,200 ,2);
	$c->mostrar();
	$c->aplicaInteres(2);
 ?>

</body>
</html>