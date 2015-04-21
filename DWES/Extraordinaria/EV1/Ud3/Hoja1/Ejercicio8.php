<html>
<head>
	<title>Ejercicio 8 Lidia</title>
</head>
<body>
	<h1>Numeros primos</h1>
	<form action="" method="POST">
	
		<div>
			<label >Introduce un numero entero</label>
		</div>
		<div>
			<input type="int" name="num" placeholder="Introduce un numero entero">
		</div>
		<button type="submit" class="btn btn-primary">Es Primo?</button>
	</form>
	<?php
	if(isset($_POST["num"])){
		$num=$_POST["num"];
		$c=0;
		for($i=2;$i<$num;$i++){
        	if($num%$i==0){
        		$c++;
			}
		}
	
		if($c!=0){
			echo $num."-> NO es primo";
		}else{
			echo $num."-> Si es primo";
		}
	}

	?>
</body>
</html>