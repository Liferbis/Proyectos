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
			<div class="checkbox">
					Medio Dia
					<input type="checkbox" name="medio1">
				</div>
		</div>
		<div class="form-group">
			<label for="">La fecha fin</label>
			<input type="date" class="form-control" name="fechaF" >
		</div>
		<button type="submit" class="btn btn-primary">dale</button>
	</form>

	<?php 
	//$festivos=array("2015-09-15","2015-09-16");
	
	$localhost="localhost";
	$usu="root";
	$ctv="";
	$bd="vacaciones";
	$dwes = new mysqli($localhost, $usu , $ctv, $bd);
	$festivos=array();
	$c="SELECT fecha FROM `festivos` ORDER BY `festivos`.`fecha` ASC";
	if($resultado = $dwes->query($c)){
		while($fes=$resultado->fetch_object()){
			$festivos [] = $fes->fecha;
		}
	}
	
	$dwes->close();
	//var_dump($festivos);
	$num=count($festivos);

	if (isset($_POST["fechaI"]) && isset($_POST["fechaF"]) ){

		$fechaI=strtotime($_POST["fechaI"]);
		$fechaF=strtotime($_POST["fechaF"]);
		$dias=0;
		$fiesta=0;
		$diaslab=0;
		$fies=false;

		for( $fechaI; $fechaI<=$fechaF; $fechaI=strtotime( '+1 day ' . date('Y-m-d',$fechaI) ) ){
			$dias++;
			// echo date('Y-m-d',$fechaI) . '<br />';
			if( (strcmp (date('D',$fechaI),'Sun')!=0) & (strcmp(date('D',$fechaI),'Sat')!=0) ){
				for ($i=0; $i <= $num-1; $i++) { 
					if( $fechaI==strtotime($festivos[$i]) ){
                        $fiesta++;
                        $fies=true;
						echo '<h1>'.date('Y-m-d',$fechaI) . '->FESTIVOOOOOOO!!!!</h1><br />';
					}
				}
				if($fies==true){
					$fies=false;
				}else{
					echo date('Y-m-d',$fechaI) . '<br />';
					$diaslab++;
				}					 
			}else{
				echo '<h1>'.date('Y-m-d',$fechaI) . '---->FINDEEEEE!!!!</h1><br />';
			}
		}
		if(isset($_POST["medio1"])){
			$diaslab=$diaslab-0.5;
		}else if(isset($_POST["medio2"])){
			$diaslab=$diaslab-0.5;
		}

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