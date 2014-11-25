<!--
3.- Cree un fichero PHP que permita comprobar las capacidades aritméticas
de PHP. Para ello, cree dos variables $operador1 y $operador2. Asígnele los
valores 13 y 4, respectivamente. Defina una tercera variable $resultado y
escriba un código que permita hacer las siguientes operaciones:
13 – 4
13 + 4
13 * 4
13 / 4
13 % 4
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

		$x =13;
		$y =4;
		
		$r=$x-$y;
		echo  "<p>El resultado de restar $x menos $y es $r</p>";
		$r=$x+$y;
		echo  "<p>El resultado de sumar $x menos $y es $r</p>";
		$r=$x*$y;
		echo  "<p>El resultado de multiplicar $x menos $y es $r</p>";
		$r=$x/$y;
		echo  "<p>El resultado de dividir $x menos $y es $r</p>";
		$r=$x%$y;
		echo  "<p>El modulo de la dividision anterior es $r</p>";
	?>

</body>
</html>