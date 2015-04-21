<html>
<head>
	<title>Ejercicio 6 Lidia</title>
</head>
<body>
	<h1>Factorial de un numero</h1>
	<form action="" method="POST">
	
		<div>
			<label >Introduce un numero entero</label>
		</div>
		<div>
			<input type="int"name="num" placeholder="Introduce un numero entero">
		</div>
		<button type="submit" class="btn btn-primary">Factorial</button>
	</form>
	<?php
	if(isset($_POST["num"])){
		$num=$_POST["num"];
		$aux=1;

		for ($i=1; $i <= $num ; $i++) { 
			$aux=$aux*$i;
			echo $i;
			if($i==$num){
				echo " = ".$aux;
			}else{
				echo " X ";
			}
		}
	}

	?>
</body>
</html>