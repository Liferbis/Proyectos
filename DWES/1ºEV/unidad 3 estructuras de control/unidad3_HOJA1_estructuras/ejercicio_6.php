<html>
<head>
	<title>Ej6</title>
</head>
<body>
	<h1>Calcular el factorial de un numero</h1>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Introduce un numero</legend>
		<div class="form-group">
			<input type="number" class="form-control" name="num" autofocus placeholder="Numero">
		</div>
		<button type="submit" class="btn btn-primary">Factorial</button>
	</form>

	<?php 
		if (isset($_POST["num"])){
			$numero=$_POST["num"];
			$fac=1;
			for($n=1; $n<=$numero; $n++){
				$fac=$fac*$n;
			}
			echo "<p>El factorial de ".$numero." es ".$fac."</p>";
			
		}else{
			$numemro="";
		}
	?>

</body>
</html>