<html>
<head>
	<title>Ejercicio 2 Lidia</title>
</head>
<body>
	<form action=" " method="POST" role="form">
		<legend>Introduce un numero</legend>
		<div class="form-group">
			<input type="int" name="num" autofocus placeholder="Numero">
			<button type="submit" class="btn btn-primary">Pulsa</button>
		</div>
		
	</form>

	<?php 
		function capicua($numero){
			$numero2 = strrev($numero); 
			if($numero==$numero2) {
				echo "<h3>El numero ".$numero." SI es capicua</h3>";
			}else{
				echo "<h3>El numero ".$numero." NO es capicua</h3>";
			}
		}
		function  digitos($numero){
			$long=strlen($numero);
			echo "<h3>El numero ".$numero." tiene un total de ".$long." dígitos</h3>";
		}
		function redondeos($numero){
			$aux=floor($numero);
			$atem=ceil($numero);
			echo "Ceil:".$atem;
			echo "<h3>El numero ".$numero." se redondea a: ".$aux."</h3>";
		}

		if ( isset($_POST["num"]) ){
			$numero=$_POST["num"];
			echo capicua($numero);
			echo digitos($numero);
			echo redondeos($numero);

		}else{
			$numero="";
		}
	?>
</body>
</html>