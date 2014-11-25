<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lidia</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<h1 class="text-center">Debes visualizar el més en el que nos encontramos dentro de una tabla</h1>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>
								<?php
									$mes=date("F");
									if ($mes=="January") $mes="Enero";
									if ($mes=="February") $mes="Febrero";
									if ($mes=="March") $mes="Marzo";
									if ($mes=="April") $mes="Abril";
									if ($mes=="May") $mes="Mayo";
									if ($mes=="June") $mes="Junio";
									if ($mes=="July") $mes="Julio";
									if ($mes=="August") $mes="Agosto";
									if ($mes=="September") $mes="Setiembre";
									if ($mes=="October") $mes="Octubre";
									if ($mes=="November") $mes="Noviembre";
									if ($mes=="December") $mes="Diciembre";
									$year=date("Y");
									echo $mes." de ".$year;
								?>
							</th>
						</tr>
						<tr>
							<th>Lunes</th>
							<th>Martes</th>
							<th>Miercoles</th>
							<th>Jueves</th>
							<th>Viernes</th>
							<th>Sabado</th>
							<th>Domingo</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$month = date( 'Y-n' );

							$week = 1;

							for ( $i=1;$i<=date( 't', strtotime( $month ) );$i++ ) {
								
								$day_week = date( 'N', strtotime( $month.'-'.$i )  );
								
								$calendar[ $week ][ $day_week ] = $i;

								if ( $day_week == 7 )
									$week++;
								
							}

						?>
						<?php foreach ( $calendar as $days ) : ?>
						<tr>
							<?php for ( $i=1;$i<=7;$i++ ) : ?>
							<td>
								<?php echo isset( $days[ $i ] ) ? $days[ $i ] : ''; ?>
							</td>
							<?php endfor; ?>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		
		
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>