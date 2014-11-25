<html>
<head>
	<title>Lidia</title>
	<meta charset="UTF-8" />
</head>
<body>
	
	<h3>Los empleados de una fábrica trabajan en dos turnos: diurno y nocturno.</h3>
	<h3>Se desea calcular el jornal diario de acuerdo con los siguientes puntos:</h3>
	<h3>
		<ul class="list-group">
			<li class="list-group-item">La tarifa de las horas diurnas es de 55€</li>
			<li class="list-group-item">La tarifa de las horas nocturnas es de 80€</li>
			<li class="list-group-item">Caso de ser domingo, la tarifa se incrementará en 200€ el turno diurno y 300€ el turno nocturno</li>
		</ul>
	</h3>
	<h3>Muestra por pantalla el sueldo de un empleado que trabaje 10 horas diurnas, 5 horas nocturnas y 1 domingo por la mañana y 1 domingo por la noche. (Para	que queden claros las distintas partidas, muéstralo desglosado y el total).</h3>
	<h3 style="color:red;">SOLUCION:</h3>
	<h5 style="color:blue;">
		<?php 
			$hd=10;
			$hn=5;
			$dd=200;
			$dn=300;
			$di=$hd*55;
			$not=$hn*80;
			$sueldo=$di+$not+$dd+$dn;
			echo "
				<p>Total en horas trabajadas</p>
				<ul class='list-group'>
					<li>Total de horas diurnas trabajadas: ".$hd." horas</li>
					<li>Total de horas nocturnas trabajadas: ".$hn." horas </li>
					<li>Total de horas diurnas un domingo  trabajadas: ".$dd." horas </li>
					<li>Total de horas nocturnas un domingo trabajadas: ".$dn." horas </li>
				</ul>
				</br>
				<p>Total a cobrar:</p>
				<ul>	
					<ul>";
						if($di>0){
							echo "<li>Por horas no festivas diurnas: ".$di."</li>";
						}
						if($not>0){
							echo "<li>Por horas no festivas nocturnas: ".$not."</li>";
						}
						if($dd>0){
							echo "<li>Por horas festivas diurnas: ".$dd."</li>";
						}
						if($di>0){
							echo "<li>Por horas festivas nocturnas: ".$dn."</li>";
						}
						echo  "<li>TOTAL: ".$sueldo."</li>

					</ul>
				</ul>";

		?>
	</h5>
</body>
</html>