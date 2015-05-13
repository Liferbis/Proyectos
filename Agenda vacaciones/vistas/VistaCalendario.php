<?php 
	require_once "header.php";
	$hoy=new Calendario();
	$ye=date("Y");
?>
	<h1 class="text-center">
		<form action=" " method="POST" role="form">
			<input type="number" name="calen" id="input" autofocus="true" placeholder="Introduzca nuevo año">
			<h5 class="text-center"><small>(desde: 1902 || hasta: 2037 )</small></h5>
		</form>
	</h1>


<?php 
	if (isset($_POST["calen"])) {
		$year=$_POST["calen"];
?>	
		<hr>
		<h1 class="text-center well">
			Año <?php echo $year;?>
		</h1>

		<div id='contenido' class='row responsive well'>
<?php
		if($year==$ye){
			$hoy->getTodosMeses();	
		}else{
			$hoy->anio($year);
		}
?>
		</div>
<?php  
	}else{
?>
		<hr>
		<h1 class="text-center well">
			Año <?php echo $ye;?>
		</h1>
		<div id='contenido' class='row responsive well'>
<?php 
			$hoy->getTodosMeses();
?>
		</div>
<?php 
	}

	include_once "pie.php";
?>