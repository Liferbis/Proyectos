<?php 
	include_once('monedero.php');
 ?>
 <html>
	<head>
	 	<title>Monedero</title>
	</head>
	<body>
		<?php 
			$m1=new monedero(500);
			$m2=new monedero(700);
			$m3=new monedero(300);

			echo "<br>Total de monederos".$m1->monederos();
			echo "<br>Monedero 1 con ".$m1->saldo();
			echo "<br>Monedero 2 con ".$m2->saldo();
			echo "<br>Monedero 3 con ".$m3->saldo();
			echo "<br>Quitamos saldo al monedeto 2 que empezo con una cantidad de". $m2->saldo();
			echo "<br>Restamos -500 y se nos queda= ". $m2->gasta(500) ;
			echo "<br>Si a esta cantidad le intentamos quitar MAS de lo que nos queda, por ejemplo 300 ";
			echo "<br>".$m2->gasta(300);
			echo "<br>Quedandonos en la misma cantidad: ".$m2->saldo()." Si quiramos el resto (200) Se nos queda a 0 <br> -----Saldo = ".$m2->gasta(200);
			echo "<br> Una vez a 0 elimunamos el monedero igualandolo a null";
			$m2=null;
			echo "<br>------Monederos = ".$m1->monederos();
			echo "<br>La clase es: " .get_class($m1);
// 			var_dump(get_declared_classes()
// );	
			echo "<br>";
			var_dump(get_class_methods('monedero'));
		?>
	</body>
 </html>