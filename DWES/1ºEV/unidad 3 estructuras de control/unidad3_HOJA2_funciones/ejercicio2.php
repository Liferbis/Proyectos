<html>
<head>
	<title>Ej2</title>
	<meta charset="UTF-8" />
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Introduce un numero</legend>
		<div class="form-group">
			<input type="number" class="form-control" name="num" placeholder="Numero">
			<input type="float" class="form-control" name="num2" placeholder="Numero decimal">
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
		function redondeos($numeros){
			$aux=floor($numeros);
			echo "<h3>El numero ".$numeros." se redondea por abajo a: ".$aux."</h3>";
			$aux=ceil($numeros);
			echo "<h3>El numero ".$numeros." se redondea por arriba a: ".$aux."</h3>";

		}

		if ( isset($_POST["num"]) && isset($_POST["num2"]) ){
			$numero=$_POST["num"];
			$numeros=$_POST["num2"];
			echo capicua($numero);
			echo digitos($numero);
			echo redondeos($numeros);

		}else{
			$numero="";
		}
	?>

</body>
</html>