<?php 
	require_once "header.php";
	$hoy=new Calendario();
	$year=date("Y");
?>
		<h1 class="text-center">
		<form action="" method="POST" role="form">
			<button type="submit" name="actu" class="btn btn-success">Año <?php echo $year; ?></button>
			<input type="number" name="calen" id="input"  placeholder="Introduzca nuevo año">
		</form>
	</h1>

	<div id='contenido' class='row responsive'>
<?php 
		$hoy->getTodosMeses();
?>
	</div>
<?php 
	if (isset($_POST["calen"])) {
		$year=$_POST["calen"];

		require_once "header.php";
?>	
		<h1 class="text-center">
			Año <?php echo $year;?>
		</h1>

		<div id='contenido' class='row responsive'>
<?php
			$hoy->anio($year);
?>
		</div>
<?php
	}else if(isset($_POST["actu"])){
		
?>	
		<h1 class="text-center">
			Año <?php echo $year;?>
		</h1>

		<div id='contenido' class='row responsive'>
<?php 
			$hoy->getTodosMeses();
?>
		</div>
<?php  
	}

	include_once "pie.php";
?>