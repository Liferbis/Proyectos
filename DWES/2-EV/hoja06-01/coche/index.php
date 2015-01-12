<?php 
	include_once ('coche.php');
 ?>
 <html>
	 <head>
	 	<title>COCHE</title>
	 </head>

	 <body>
	 	<h1>Tu coche:</h1>
	 	<?php 
	 		$m="S-2623-AK";
	 		$v=50;
	 		$c = new coche($m, $v);
	 		echo $c-> mostrar();
	 		echo "<br>";
	 		echo "->>> aceleramos +50";
	 		echo "<br>";
	 		$c->acelera($v);
	 		echo $c-> mostrar();
	 		echo "<br>";
	 		echo "->>> aceleramos +50";
	 		echo "<br>";
	 		echo $c->acelera($v);
	 		echo "<br> Al no poder acelerar tanto, no acelera nada... <br>";
	 		echo $c-> mostrar();
	 		echo "<br>->>> deceleramos -50";
	 		echo "<br>";
	 		$c->decelera($v);
	 		echo $c-> mostrar();
	 		echo "<br>";
	 		echo "->>> deceleramos -70";
	 		echo "<br>";
	 		$v=70;
	 		echo $c->decelera($v);
	 		echo "<br> Al no poder decelerar tanto, no decelera nada... <br>";
	 		echo $c-> mostrar();
	 		echo "<br>->>> deceleramos -50";
	 		echo "<br>";
	 		$v=50;
	 		$c->decelera($v);
	 		echo $c-> mostrar();
	 		echo "<br>";
	 	 ?>
	 </body>
 </html>