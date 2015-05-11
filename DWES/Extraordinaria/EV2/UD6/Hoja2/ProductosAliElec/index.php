<?php 
require_once "Productos.php";
require_once "Alimentacion.php";
require_once "Electronica.php";
?>
<html>
<head>
	<title>Productos-Alimentacion-Electronica</title>
</head>
<body>
<?php 
	$prod=array(
		new Alimentacion("25639 ",1, "Azucar", 7 , 2019),
		new Alimentacion("72935 ",3, "Patatas", 8 , 2015),
		new Electronica("02587 ",1400, "Television ",2018),
		new Electronica("02759 ",350, "Samsung G Mini ",2018)
		);
?>
<h1 style="color:red">Su Cesta de la compra: </h1>

<?php 
	$sum=0;
	$aux1=0;
	$aux=0;
	foreach ($prod as $key) {
		$sum+=$key->getPrecio();
		if($key instanceof Alimentacion ){
		 	$aux1+=$key->getPrecio();	
		}
		if($key instanceof Electronica ){
		 	$aux+=$key->getPrecio();	
		}
		echo $key->mostrar()."<hr>";
	}
 ?>

<h1 style="color:blue">TOTAL : <?php echo $sum; ?></h1>
<?php 
	if ($aux1>$aux) {
		$aux="Alimentación= ".$aux1;
	}else{
		$aux="Electronica= ".$aux;
	}
 ?>
<h1 style='color:DarkViolet'>Se ha gastado mas dinero en: <?php echo $aux; ?> </h1>

</body>
</html>