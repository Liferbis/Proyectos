<html>
<head>
	<title>Ejercicio 3 Lidia</title>
</head>
<body>
	<h1>
		<?php 
			$num1=13;
			$num2=4;
		?>
		<ul>
			<li>
				<?php
					$resultado=$num1-$num2;
					echo $num1." – ".$num2."= ".$resultado;
				 ?>
			</li>
			<li>
				<?php 
					$resultado=$num1+$num2;
					echo $num1." + ".$num2."= ".$resultado;				 ?>
			</li>
			<li>
				<?php 
					$resultado=$num1*$num2;
					echo $num1." * ".$num2."= ".$resultado;				 ?>
			</li>
			<li>
				<?php  
					$resultado=$num1/$num2;
					echo$num1." / ".$num2."= ".$resultado;				 ?>
			</li>
			<li>
				<?php 
					$resultado=$num1%$num2;
					echo $num1." % ".$num2."= ".$resultado;				 ?>
			</li>
		</ul>
			
	</h1>
</body>
</html>