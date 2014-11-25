<!--
8.- Realizar el ordinograma de un programa que desglose una cantidad de
euros en billetes de 10 y 5 y monedas de 1 euro.
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		$dinero =888;
		echo "<p>Tengo ",$dinero,"€ desglosandolo seria: </p>";

		function desc($dinero){
			$d=10;
			$aux =$dinero % $d;
			if($aux == 0){
				$aux=$dinero/$d;
				echo "<p>-",(floor($aux)) ," billetes de 10€</p>";
			}else {
				$div=$dinero/$d;
				$aux=$dinero%$d;
				$t=$aux%5;
				if($t==0){
					$t=$aux/5;
					echo "<p>->",(floor($div)) ," billetes de 10€</p>";
					echo "<p>->",(floor($t)) ," billetes de 5€</p>";
				}else{
					$t=$aux/5;
					echo "<p>->",(floor($div)) ," billetes de 10€</p>";
					echo "<p>->",(floor($t)) ," billetes de 5€</p>";
					$t=$aux%5;
					echo "<p>->",$t, "€ </p>" ;
				}

			}
		}
		desc($dinero);
	?>

</body>
</html>