<?php 
	session_start();

	if(isset($_SESSION['visitas'])){
		$_SESSION['visitas']++;
		;
	}else{
		$_SESSION['visitas']=0;
	}

	$_SESSION['misvisitas'][]=date('d/m/y H:i:s');

	foreach ($_SESSION['misvisitas'] as $value) {
		echo $value.'<br>';
	}
	
 ?>