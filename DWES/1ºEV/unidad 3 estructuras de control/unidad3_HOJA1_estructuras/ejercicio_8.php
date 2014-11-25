<html>
<head>
	<title>Ej8</title>
	<meta charset="UTF-8" />
</head>
<body>
	<h1>PROBLEMA</h1>
	
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Introduce el numero</legend>
		<div class="form-group">
			<input type="number" class="form-control" name="pri" autofocus placeholder="Numero">
		</div>
		
		<button type="submit" class="btn btn-primary">PRIMO ¿?¿?¿</button>
	</form>

	<?php 
		if (isset($_POST["pri"])){
			$p=$_POST["pri"];

			if( ($p%2) == 0){
				echo "<p>El numero NO es primo </p>";
			}else if( ($p%3) == 0){	
				echo "<p>El numero NO es primo </p>";
			}else{
				echo "<p>El numero SI es primo </p>";
			}
		}else{
			$p="";
		}
	?>
</body>
</html>