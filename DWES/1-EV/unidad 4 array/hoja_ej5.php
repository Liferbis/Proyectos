<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$articulo=array(
				"Codigo"=>array(
					0=>"001",
					1=>"002",
					2=>"003",
					3=>"004"
					),
				"Descripcion"=>array(
					0=>"Vaso",
					1=>"Pajita",
					2=>"Posavasos",
					3=>"Garrafas"
					),
				"Existencias"=>array(
					0=>"20",
					1=>"100",
					2=>"50",
					3=>"1500"
					)
				);

			function mayor($articulo){
				$num=0;
				$mayor=$articulo["Existencias"][0];
				foreach ($articulo["Existencias"] as $key => $value) {
					if($mayor<$value){
						$mayor=$value;
						$num=$key;
					}
				}
				echo "<p> El articulo con mayor numero de existencias es: ".$articulo["Descripcion"][$num]." con ".$mayor." existencias</p>";
			}

			function sumar($articulo){
				$sum=0;
				foreach ($articulo["Existencias"] as $key => $value) {
					$sum+=$value;
				}
				echo "<p> La suma se todas las existencias es: ".$sum."</p>";
			}

			function mostrar($articulo){
				echo "<pre>";
				print_r($articulo);
				echo "</pre>";
			}	
					
		mostrar($articulo);
		sumar($articulo);		
		mayor($articulo);	
	?>

</body>
</html>