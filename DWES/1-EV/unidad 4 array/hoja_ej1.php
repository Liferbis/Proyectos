<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 >Haz un programa que realice la fusión de dos arrays de 20 numeros ordenados.</h1 >
		<h1> Implementa las funciones: cargar, ordenar y mezclar (merge).</h1>

		<?php  
		

		function cargar(){
			$array = array();
			for($i=0; $i<20; $i++){
				$num=round(rand( 0 , 20));
				array_push($array, $num);
			}
			return $array;
		}

		function fusion($array1 , $array2){
			$superArray=array();
			for($i=0; $i<20; $i++){
				$num=$array1[$i];
				array_push($superArray, $num);
			}
			for($i=0; $i<20; $i++){
				$num=$array2[$i];
				array_push($superArray, $num);
			}
			return $superArray;
		}

		function ordenar($array){
			array_
		}

		$array1=cargar() ;
		$array2=cargar() ;
		$super=fusion($array1,$array2);

		echo "<h3>Array 1: </h3></br>".$array1;
		echo "<h3>Array 2: </h3></br>".$array2;
		echo "<h3>Array Resultante: </h3></br>".$super;


		

		?>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>