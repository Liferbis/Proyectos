<html>
<head>
	<title>Ej1</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Introduce un numero</legend>
		<div class="form-group">
			<input type="number" class="form-control" name="num" placeholder="Numero">
		</div>
		<button type="submit" class="btn btn-primary">CAPICUA?¿?¿?¿?</button>
	</form>

	<?php 
		if (isset($_POST["num"])){
			$numero=$_POST["num"];
			$numero2 = strrev($numero); 
			if($numero==$numero2) {
				echo "<h3>El numero es capicua</h3>";
			}else{
				echo "<h3>El numero NO es capicua</h3>";
			}
		}else{
			$numero="";
		}
	?>

</body>
</html>