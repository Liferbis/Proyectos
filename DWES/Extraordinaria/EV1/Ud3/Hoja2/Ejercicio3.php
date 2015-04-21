<html>
<head>
	<title>Ejercicio 3 Lidia</title>
</head>
<body>
	<form action=" " method="POST">
		<legend>Introduce un numero</legend>
		<div class="form-group">
			<input type="int" name="num" placeholder="Fecha dd-mm-aaaa">
			
			<button type="submit" class="btn btn-primary">validator</button>
		</div>
		
	</form>
<?php 
	function validator($fecha){
			$d = (int) substr(($fecha), 0, 2);
            $m = (int) substr(($fecha), 3, 2);
            $y = (int) substr(($fecha), 6, 4);
			$aux= checkdate($m, $d, $y);
			if($aux==0){
				echo "<h3>Fecha INCORRECTA</h3>";
			}else{
				echo "<h3>Fecha CORRECTA</h3>";
			}
				
		}
		

		if ( isset($_POST["num"])){
			$fecha=$_POST["num"];
			echo validator($fecha);

		}
 ?>
</body>
</html>