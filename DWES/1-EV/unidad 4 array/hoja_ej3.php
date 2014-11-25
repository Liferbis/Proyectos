<!--
8.- Realizar el ordinograma de un programa que desglose una cantidad de
euros en billetes de 10 y 5 y monedas de 1 euro.
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Introduce tu NIF</legend>
		<div class="form-group">
			<input type="Numero" class="form-control" name="pri" autofocus placeholder="SOLO EL NUMERO">
		</div>
		
		<button type="submit" class="btn btn-primary">Letra</button>
	</form>

	<?php 
		if (isset($_POST["pri"])){
			$d=$_POST["pri"];
		}else{
			$d=" ";
		}

			

			function desc($d){
				$letras=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
				
				$aux=$d%23;

				return $letras[$aux];

				
			}

			echo "<p>DNI ".$d." la letra seria:".desc($d)."</p>";
			
	?>

</body>
</html>