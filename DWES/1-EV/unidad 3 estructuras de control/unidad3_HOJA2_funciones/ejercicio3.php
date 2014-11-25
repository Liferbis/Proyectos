<html>
<head>
	<title>Ej2</title>
	<meta charset="UTF-8" />
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Introduce un numero</legend>
		<div class="form-group">
			<input type="date" class="form-control" name="num" placeholder="Numero">
			<!-- MUESTRA AÑO-MES-DIA-->
			<button type="submit" class="btn btn-primary">Validatorrrr</button>
		</div>
		
	</form>
	<?php 

		function Validatorrrr($fecha){
			list($y,$m,$d)=explode('-',$fecha);
			$aux= checkdate($m, $d, $y);;
			if($aux==0){
				echo "<h3>Fecha INCORRECTA</h3>";
			}else{
				echo "<h3>Fecha CORRECTA</h3>";
			}
				
		}
		

		if ( isset($_POST["num"])){
			$fecha=$_POST["num"];
			echo Validatorrrr($fecha);

		}else{
			$fecha="";
		}
	?>

</body>
</html>