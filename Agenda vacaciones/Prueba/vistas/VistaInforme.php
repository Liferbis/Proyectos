<?php require_once "header.php" ?>
<?php require_once "libreria/PHPExcel/Classes/PHPExcel.php" ?>
	<div class="contenido">
		<h1 class="text-center" >Informe de vacaciones y otros permisos</h1>
		
		<form action="index.php" method="POST">
			<div class="row well">	
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<input type="radio" name="excel" value="0" checked="checked">
						Generar TODO de TODOS
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<input type="radio" name="excel" value="1">
						Generar TODO de un empleado especifico
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<input type="int" name="num1" placeholder="codigo de empleado">
					</div>
				</div>
			</div>
			</br>
			<div class="row wel">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						Seleccione tipo:
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<select name="tipo">
							<option>---- Seleccione tipo ----</option>
							<option value="vaca">Vacaciones</option>
							<option value="pnr">Permiso no retribuido</option>
							<option value="pr">Permiso retribuido</option>
							<option value="bec">Baja enfermedad comun</option>
							<option value="bal">Baja accidente laboral</option>
						</select>
					</div>
				</div>
				<div class="row">
					<input type="radio" name="excel" value="2">
					Generar tipo de TODOS
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<input type="radio" name="excel" value="3">
						Generar tipo de un empleado especifico
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<input type="int" name="num1" placeholder="codigo de empleado">
					</div>
				</div>
			</div>

		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
		
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th class="text-center" colspan="6"><h3>Vacaciones</h3></th>
					</tr>
					<tr>
						<th>Empleados</th>
						<th>Fecha Inicio</th>
						<th>Fecha Fin</th>
						<th>Dias Naturales</th>
						<th>Dias laborables</th>
						<th>Saldo</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<?php 
								//echo $cod_emple;
							 ?>
						</td>
					</tr>
				</tbody>
			</table>
			<?php
				$objPHPExcel = new PHPExcel();

				$objPHPExcel->getProperties()
					->setCreator("Cattivo")
					->setLastModifiedBy("Cattivo")
					->setTitle("Documento Excel de Prueba")
					->setSubject("Documento Excel de Prueba")
					->setDescription("Demostracion sobre como crear archivos de Excel desde PHP.")
					->setKeywords("Excel Office 2007 openxml php")
					->setCategory("Pruebas de Excel");


// $contador = 0; 
// $conexion = mysql_connect("localhost","host", ""); 
// if(!$conexion){ echo "Error al conectar a la base de datos"; } 
// if(!mysql_select_db("prueba",$conexion)) 
// { echo "Error al seleccionar la tabla"; } 

// $res = mysql_query("consulta", $conexion); 
// while($fila == mysql_fetch_array($res)) 
// { 
// $contador++; 
// $prueba->setActiveSheetIndex(0)->setCellValue("A" . $contador, $fila["valor"]);
// // <---- con esto podrias llenar toda la fila A1 al momento de que entre otro registro se 
// //cambiaria a A2 y asi =) 
// }


//Crear excel con php    http://www.taringa.net/posts/linux/15716598/Crear-documentos-excel-con-PHP.html

				// We give the path to our file here
				// $workbook = new Spreadsheet_Excel_Writer('$ruta/prueba1.xls');

				// $worksheet = $workbook->addWorksheet('My first worksheet');

				// $objPHPExcel->setActiveSheetIndex(0)	
				// 	->setCellValue('A1','Empleado')
				// 	->setCellValue('B1', 'Vacaciones')
				// 	->setCellValue('C1', '')
				// 	->setCellValue('D1', '')
				// 	->setCellValue('E1', '')
				// 	->setCellValue('F1', '')
				// 	->setCellValue('G1', '')
				// 	->setCellValue('H1', 'Otros')
				// 	->setCellValue('I1', '')
				// 	->setCellValue('J1', 'Baja')
				// 	->setCellValue('K1', '')
				// 	->setCellValue('L1', 'Datos')
				// 	->setCellValue('M1', '')

				// 	->setCellValue('A2', 'Empleado')
				// 	->setCellValue('B2', 'Fecha Inicio')
				// 	->setCellValue('C2', 'Fecha Fin')
				// 	->setCellValue('D2', 'Dias Naturales')
				// 	->setCellValue('E2', 'Dias laborables')
				// 	->setCellValue('F2', 'Aumento Vac.')
				// 	->setCellValue('G2', 'Saldo')
				// 	->setCellValue('H2', 'Permiso Retribuido')
				// 	->setCellValue('I2', 'Permiso NO Retribuido')
				// 	->setCellValue('J2', 'Baja AL')
				// 	->setCellValue('K2', 'Baja EC')
				// 	->setCellValue('L2', 'Comentarios')
				// 	->setCellValue('M2', 'Usuario')

				//cargamos todo sobre el empleado en un array
				//$empleado = BD::cargaExcel($cod_emple);

				//Se agregan los datos de los alumnos
 			//	$i = 3; //Numero de fila donde se va a comenzar a rellenar
 				// while ($fila = $resultado->fetch_array()) {
					
					// ->setCellValue('A'.$i, 'Empleado')
					// ->setCellValue('B'.$i, 'Fecha Inicio')
					// ->setCellValue('C'.$i, 'Fecha Fin')
					// ->setCellValue('D'.$i, 'Dias Naturales')
					// ->setCellValue('E'.$i, 'Dias laborables')
					// ->setCellValue('F'.$i, 'Aumento Vac.')
					// ->setCellValue('G'.$i, 'Saldo')
					// ->setCellValue('H'.$i, 'Permiso Retribuido')
					// ->setCellValue('I'.$i, 'Permiso NO Retribuido')
					// ->setCellValue('J'.$i, 'Baja AL')
					// ->setCellValue('K'.$i, 'Baja EC')
					// ->setCellValue('L'.$i, 'Comentarios')
					// ->setCellValue('M'.$i, 'Usuario');

					// $objPHPExcel->getActiveSheet()->setTitle('Prueba1');			
				
				// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
				// header('Content-Disposition: attachment;filename=""');
				// header('Cache-Control: max-age=0');
			//$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			//$objWriter->save('pruebaReal.xlsx');
			//exit;
				// We still need toC explicitly close the workbook
				//$workbook->close();
				?>
		</div>
	</div>
<?php require_once "pie.php" ?>
