<?php
////////////////////////////
//************************//
//////  Crear PDF  /////////
/* http://www.kabytes.com/programacion/crear-un-pdf-desde-javascript/ */
//************************//
////////////////////////////

// if( isset($_POST['empleado'], $_POST['fechaI'], $_POST['fechaF'], $_POST['tipe'], $_POST['descrip'], $_POST['diasN'], $_POST['diasL']) ) {

	introducir($_POST['empleado'], $_POST['fechaI'], $_POST['fechaF'], $_POST['tipe'], $_POST['descrip'], $_POST['diasN'], $_POST['diasL']);
	echo "<h1>DENTROOO </h1>";

// } else {
// 	$message = sprintf("Solicitud no válida.");
// 	header($_SERVER['SERVER_PROTOCOL'] . ' ' . $message, true, 403);
// }

function introducir($empleado, $fechaIn, $fechaFi, $tipo, $comentario, $diasN, $diasL){

	require_once "BaseDeDatos.php";

	$emple=BD::UnEmpleado($empleado);

	foreach ($emple as $em) {
		$codigo=$em->codigo;
		$dni=$em->dni;
		$nombre=$em->nombre;
		$apellido1=$em->apellido1;
		$apellido2=$em->apellido2;
		$localidad=$em->localidad;
		$movil=$em->movil;
		$comentarios=$em->comentarios;
		$saldo=$em->saldo;
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
							<td><?php echo $diasN; ?></td>
						</tr>
						<tr>
							<td>Num Dias Laborables</td>
							<td><?php echo $diasL; ?></td>
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
							<td><?php echo $diasN; ?></td>
						</tr>
						<tr>
							<td>Num Dias Laborables</td>
							<td><?php echo $diasL; ?></td>
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

<?php 
}
 ?>