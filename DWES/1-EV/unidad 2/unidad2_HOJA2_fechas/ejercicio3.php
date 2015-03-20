<html>
<head>
	<title>HOJA 2</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
		<legend>Calculador de dias</legend>

		<div class="form-group">
			<label for="">La fecha In</label>
			<input type="date" class="form-control" name="fechaI" >
		</div>
		<div class="form-group">
			<label for="">La fecha fin</label>
			<input type="date" class="form-control" name="fechaF" >
		</div>
		<button type="submit" class="btn btn-primary">dale</button>
	</form>

	<?php 
	$festivos=array("2015-09-15","2015-09-16");
	$num=count($festivos);



	if (isset($_POST["fechaI"]) && isset($_POST["fechaF"]) ){

		$fechaI=strtotime($_POST["fechaI"]);
		$fechaF=strtotime($_POST["fechaF"]);
		$dias=0;
		$i=0;
		$fiesta=0;
		$diaslab=0;
		for( $fechaI; $fechaI<=$fechaF; $fechaI=strtotime( '+1 day ' . date('Y-m-d',$fechaI) ) ){
			$dias++;
			// echo date('Y-m-d',$fechaI) . '<br />';
			if( (strcmp (date('D',$fechaI),'Sun')!=0) & (strcmp(date('D',$fechaI),'Sat')!=0) ){
				if($i<= ($num-1) ){	
					if( $fechaI==strtotime($festivos[$i]) ){
						$fiesta++;
						echo '<h1>'.date('Y-m-d',$fechaI) . '->FESTIVOOOOOOO!!!!</h1><br />';
						$i++;
					}else{
						echo date('Y-m-d',$fechaI) . '<br />';
						$diaslab++;
					}
				}else{
					echo date('Y-m-d',$fechaI) . '<br />';
					$diaslab++;
				}					 
			}else{
				echo '<h1>'.date('Y-m-d',$fechaI) . '---->FINDEEEEE!!!!</h1><br />';
			}
		}
			// if($i<= ($num-1) ){
			// 	if( (strcmp (date('Y-m-d',$fechaI),(date('Y-m-d',$festivos[0]) )!= 0){
			// 		$fiesta++;
			// 		echo '<h1>'.date('Y-m-d',$fechaI) . '->FESTIVOOOOOOO!!!!</h1><br />';
			// 		$i++;

			// 	}	
			// }
			// (strtotime($fechaF)-strtotime($fechaI))/86400;
			// $dias=abs($dias);
			// $dias=floor($dias);

			// echo "Fecha Inicio: ".$fechaI;
			// $fechaI = new DateTime($fechaI);
			// // var_dump($festivos);
			// // echo $num;
			// $i=0;
			// while($fechaI!=$fechaF){
			// 	$intervalo = new DateInterval('P1D');
			// 	$fechaI->add($intervalo);

			// 	$dias++;
			// 	if($fechaI->format('Y-m-d') == $fechaF){
			// 		echo "<br>Fecha FIN: ".$fechaF;
			// 		break;
			// 	}else{
			// 		echo "<br>Fecha Inicio + ".$dias." : ";
			// 		echo $fechaI->format('Y-m-d');
			// 	}
			// 	if($i<= ($num-1) ){
			// 		if($fechaI->format('Y-m-d') == $festivos[$i]){
			// 			$fiesta++;
			// 			echo "--->Dia Festivo";
			// 			$i++;

			// 		}	
			// 	}


	echo "<ul> Total de dias: ".$dias.
	"<li> Dias Naturales: ".$dias."</li>".
	"<li>Dias festivos: ";
	if($fiesta==0){
		echo "<h3>Ningun festivo</h3></li>";
	}else{
		echo $fiesta."</li>";
	}
	
	echo    "<li>Dias laborables:".$diaslab."</li>".
	"</ul>";
}else{
	$fecha="";
}




?>
</body>
</html>