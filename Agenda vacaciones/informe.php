<?php require_once "header.php" ?>
<?php require_once "./libreria/Excel-PHP/PHPExcel.php" ?>
	<div class="text-center">
		<h1  >Informe de vacaciones y otros permisos</h1>

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
						<td></td>
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


//Crear excel con php    http://www.taringa.net/posts/linux/15716598/Crear-documentos-excel-con-PHP.html

				// We give the path to our file here
				// $workbook = new Spreadsheet_Excel_Writer('$ruta/prueba1.xls');

				// $worksheet = $workbook->addWorksheet('My first worksheet');

				$objPHPExcel->setActiveSheetIndex(0)	
					->setCellValue('A1','Empleado')
					->setCellValue('B1', 'Vacaciones')
					->setCellValue('C1', '')
					->setCellValue('D1', '')
					->setCellValue('E1', '')
					->setCellValue('F1', '')
					->setCellValue('G1', '')
					->setCellValue('H1', 'Otros')
					->setCellValue('I1', '')
					->setCellValue('J1', 'Baja')
					->setCellValue('K1', '')
					->setCellValue('L1', 'Datos')
					->setCellValue('M1', '')

					->setCellValue('A2', 'Empleado')
					->setCellValue('B2', 'Fecha Inicio')
					->setCellValue('C2', 'Fecha Fin')
					->setCellValue('D2', 'Dias Naturales')
					->setCellValue('E2', 'Dias laborables')
					->setCellValue('F2', 'Aumento Vac.')
					->setCellValue('G2', 'Saldo')
					->setCellValue('H2', 'Permiso Retribuido')
					->setCellValue('I2', 'Permiso NO Retribuido')
					->setCellValue('J2', 'Baja AL')
					->setCellValue('K2', 'Baja EC')
					->setCellValue('L2', 'Comentarios')
					->setCellValue('M2', 'Usuario')

					->setCellValue('A3', 'Empleado')
					->setCellValue('B3', 'Fecha Inicio')
					->setCellValue('C3', 'Fecha Fin')
					->setCellValue('D3', 'Dias Naturales')
					->setCellValue('E3', 'Dias laborables')
					->setCellValue('F3', 'Aumento Vac.')
					->setCellValue('G3', 'Saldo')
					->setCellValue('H3', 'Permiso Retribuido')
					->setCellValue('I3', 'Permiso NO Retribuido')
					->setCellValue('J3', 'Baja AL')
					->setCellValue('K3', 'Baja EC')
					->setCellValue('L3', 'Comentarios')
					->setCellValue('M3', 'Usuario');

					$objPHPExcel->getActiveSheet()->setTitle('Prueba1');			
				
				// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
				// header('Content-Disposition: attachment;filename=""');
				// header('Cache-Control: max-age=0');
				$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
				$objWriter->save('pruebaReal.xlsx');
				exit;
				// We still need toC explicitly close the workbook
				//$workbook->close();
				?>
		</div>
	</div>
<?php require_once "pie.php" ?>
