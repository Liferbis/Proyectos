<html>
<head>
	<title>Ejercicio 3 Lidia</title>
</head>
<body>
	<form action=" " method="POST" role="form">
		<legend>Introduce tu NIF</legend>
		<div class="form-group">
			<input type="string" class="form-control" name="pri" autofocus placeholder="Introduce el DNI">
		</div>
		
		<button type="submit" class="btn btn-primary">Letra</button>
	</form>

	<?php 
		if (isset($_POST["pri"])){
			$d=$_POST["pri"];
			if(compruebaDNI($d)==true){
				echo "La letra del DNI es CORRECTO";
			}else{
				echo "La letra del DNI es INCORRECTO";
			}
		}

		function compruebaDNI($d){
			$letras=array("T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E");
			$num=substr($d, 0,-1);
			$l=substr($d, -1);
			$aux=$num%23;
			if($letras[$aux]==$l){
				return true;
			}else{
				return false;
			}
		}
	?>
</body>
</html>