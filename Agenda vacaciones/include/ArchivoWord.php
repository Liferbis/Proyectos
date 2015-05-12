<?php 

foreach ($emple as $empleado) {
			$codigo=$empleado->codigo;
			$dni=$empleado->dni;
			$nombre=$empleado->nombre;
			$apellido1=$empleado->apellido1;
			$apellido2=$empleado->apellido2;
			$localidad=$empleado->localidad;
			$movil=$empleado->movil;
			$comentarios=$empleado->comentarios;
			$saldo=$empleado->saldo;
}

$hoy=date("Y-m-d H:i:s");
$hoy1=date("Y-m-d");
$docu=$nombre."_".$apellido1."-".$hoy1;

header('Content-type: application/vnd.ms-word');
header('Content-Disposition: attachment;Filename='.$docu.'.doc');
header('Pragma: no-cache');
header('Expires: 0');



?>
<html>
 	<meta http-equiv=\'Content-Type\'content=\'text/html; charset=Windows-1252\'>
 	<body>
 		<div class='contenedor'>
 			<div class='empleado'>
				<table width=100%  style='border:1px solid black'>
					<thead>
						<tr colspan='2'>
							<th colspan='2'><h3>SOLICITUD DE VACACIONES-PERMISOS</h3></th>
						</tr>
					</thead>
					<tbody style='text-aling:center'>
						<tr colspan='2' >
							<td colspan='2' style='border:1px solid black'><h4>DATOS PERSONALES</h4></td>
						</tr>
						<tr>
							<td>Nombre y apellidos: </td>
							<td><?php echo $nombre.' '.$apellido1; ?></td>
						</tr>
						<tr>
							<td>DNI</td>
							<td><?php echo $dni; ?></td>
						</tr>
						<tr>
							<td>Localidad de trabajo</td>
							<td><?php echo $localidad; ?></td>
						</tr>
						<tr colspan='2' >
							<td colspan='2' style='border:1px solid black'><h4>VACACIONES-PERMISOS</h4></td>
						</tr>
						<tr>
							<td>Desde</td>
							<td><?php echo $fechaIn; ?></td>
						</tr>
						<tr>
							<td>Hasta</td>
							<td><?php echo $fechafi; ?></td>
						</tr>
						<tr>
							<td>Num Dias Naturales</td>
							<td><?php echo $dias; ?></td>
						</tr>
						<tr>
							<td>Num Dias Laborables</td>
							<td><?php echo $diaslab; ?></td>
						</tr>
						<tr>
							<td>Con el caracter de:</td>
					
							<?php  
								if($tipo=='vacaciones'){
							?>	
									<td>
										VACACIONES
									</td>	
							<?php 
								}else if($tipo=='PerRe'){ 
							?>
									<td>
										PERMISO RETRIBUIDO
									</td>
							<?php 
								}else if($tipo=='PerNoRe'){ 
							?>
									<td>
										PERMISO NO RETRIBUIDO
									</td>
							<?php  
								}
							?>
						</tr>
						<tr colspan='2' >
							<td colspan='2' style='border:1px solid black'><h4>OBSERVACIONES</h4></td>
						</tr>
						<tr colspan='2'>
							<td colspan='2'><?php echo $comentario; ?><br></td>
						</tr>
					</tbody>
				</table>

				<table width=100% >
					<thead>
						<tr>
							<th>FIRMA DEL SOLICITANTE:</th>
							<th>AUTORIZADO POR:</th>
						</tr>
					</thead>
					<tbody>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td colspan='2'>COPIA PARA EL EMPLEADO &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<small style='color:gray'><?php echo $hoy ?></small></td>
						</tr>
					</tbody>
				</table>
			</div>
			<hr>
			<div class='empresa'>
				<table width=100%  style='border:1px solid black'>
					<thead>
						<tr colspan='2'>
							<th colspan='2'><h3>SOLICITUD DE VACACIONES-PERMISOS</h3></th>
						</tr>
					</thead>
					<tbody>
						<tr colspan='2' >
							<td colspan='2' style='border:1px solid black'><h4>DATOS PERSONALES</h4></td>
						</tr>
						<tr>
							<td>Nombre y apellidos: </td>
							<td><?php echo $nombre.' '.$apellido1; ?></td>
						</tr>
						<tr>
							<td>DNI</td>
							<td><?php echo $dni; ?></td>
						</tr>
						<tr>
							<td>Localidad de trabajo</td>
							<td><?php echo $localidad; ?></td>
						</tr>
						<tr colspan='2' >
							<td colspan='2' style='border:1px solid black'><h4>VACACIONES-PERMISOS</h4></td>
						</tr>
						<tr>
							<td>Desde</td>
							<td><?php echo $fechaIn; ?></td>
						</tr>
						<tr>
							<td>Hasta</td>
							<td><?php echo $fechafi; ?></td>
						</tr>
						<tr>
							<td>Num Dias Naturales</td>
							<td><?php echo $dias; ?></td>
						</tr>
						<tr>
							<td>Num Dias Laborables</td>
							<td><?php echo $diaslab; ?></td>
						</tr>
						<tr>
							<td>Con el caracter de:</td>
					
							<?php  
								if($tipo=='vacaciones'){
							?>	
									<td>
										VACACIONES
									</td>	
							<?php 
								}else if($tipo=='PerRe'){ 
							?>
									<td>
										PERMISO RETRIBUIDO
									</td>
							<?php 
								}else if($tipo=='PerNoRe'){ 
							?>
									<td>
										PERMISO NO RETRIBUIDO
									</td>
							<?php  
								}
							?>
						</tr>
						<tr colspan='2' >
							<td colspan='2' style='border:1px solid black'><h4>OBSERVACIONES</h4></td>
						</tr>
						<tr colspan='2'>
							<td colspan='2'><?php echo $comentario; ?><br></td>
						</tr>
					</tbody>
				</table>

				<table width=100% >
					<thead>
						<tr>
							<th>FIRMA DEL SOLICITANTE:</th>
							<th>AUTORIZADO POR:</th>
						</tr>
					</thead>
					<tbody>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td colspan='2'>COPIA PARA LA EMPRESA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<small style='color:gray'><?php echo $hoy ?></small></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
 	</body>
</html>