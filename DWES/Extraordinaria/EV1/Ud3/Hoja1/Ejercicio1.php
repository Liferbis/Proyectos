<html>
<head>
	<title>Ejercicio 1 Lidia</title>
</head>
<body>
	<form action="" method="POST">	
		<div >
			<label >Introduce un numero entero para saber si es capicua</label>
		</div>
		<div >
			<input type="int" name="num" placeholder="Introduce un numero entero">
		</div>
		<button type="submit" class="btn btn-primary">ES CAPICUA</button>
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