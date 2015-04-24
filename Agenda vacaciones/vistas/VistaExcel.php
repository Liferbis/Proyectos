<?php 
include_once "header.php";
require_once "libreria\Excel-PHP\PHPExcel.php";

?>
<div class="text-center">
	<div class="row " >
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3 class="text-center">EXCEL</h3>
			<!-- <h5 class="text-center">Disculpe las molestias </h5> -->
		</div>

<?php 
	$objPHPExcel = new PHPExcel();

	$objPHPExcel->getProperties()->setCreator("LidiaF");
	$objPHPExcel->getProperties()->setTitle("Documento Excel de Prueba");
	$objPHPExcel->getProperties()->setSubject("Documento Excel de Prueba");
	$objPHPExcel->getProperties()->setDescription("Prueba de archivos de Excel desde PHP.");
	$objPHPExcel->getProperties()->setKeywords("Excel Office 2007 openxml php");
	$objPHPExcel->getProperties()->setCategory("Pruebas de Excel");
	
			$objPHPExcel->setActiveSheetIndex(0)
   						 ->mergeCells('A1:O1');
			$objPHPExcel->setActiveSheetIndex(0)
   						 ->mergeCells('A3:B3');
   			$objPHPExcel->setActiveSheetIndex(0)
   						 ->mergeCells('C3:G3');
   			$objPHPExcel->setActiveSheetIndex(0)
   						 ->mergeCells('H3:J3');
   			$objPHPExcel->setActiveSheetIndex(0)
   						 ->mergeCells('K3:L3');
	
			$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1','Gestor de vacaciones')

					->setCellValue('A3','Empleado')
					->setCellValue('C3','DATOS')
					->setCellValue('H3', 'Tipo')
					->setCellValue('K3', 'Baja')
					->setCellValue('M3', 'COMENTARIO')
					->setCellValue('N3', 'USUARIO')
					->setCellValue('O3', 'Fecha')

					->setCellValue('A4', 'Nombre')
					->setCellValue('B4', 'Apellido')
					->setCellValue('C4', 'Fecha Inicio')
					->setCellValue('D4', 'Fecha Fin')
					->setCellValue('E4', 'Dias Naturales')
					->setCellValue('F4', 'Dias laborables')
					->setCellValue('G4', 'Saldo')
					->setCellValue('H4', 'Vacaciones')
					->setCellValue('I4', 'Permiso Retribuido')
					->setCellValue('J4', 'Permiso NO Retribuido')
					->setCellValue('K4', 'Baja AL')
					->setCellValue('L4', 'Baja EC')
					->setCellValue('M4', 'Comentarios')
					->setCellValue('N4', 'Usuario')
					->setCellValue('O4', 'Fecha');

 					$i = 6; //Numero de fila donde se va a comenzar a rellenar
 				foreach ($empleados as $emple) {
 					$objPHPExcel->getActiveSheet()
 								->setCellValue('A'.$i, $emple->nombre)
								->setCellValue('B'.$i, $emple->apellido1)
								->setCellValue('C'.$i, $emple->FechaInicio)
								->setCellValue('D'.$i, $emple->FechaFin)
								->setCellValue('E'.$i, $emple->dias_Natu)
								->setCellValue('F'.$i, $emple->dias_lab)
								->setCellValue('G'.$i, $emple->SALDO_DIAS)
								->setCellValue('H'.$i, $emple->vacaciones)
								->setCellValue('I'.$i, $emple->PerRetri)
								->setCellValue('J'.$i, $emple->PerNoRetri)
								->setCellValue('K'.$i, $emple->Bal)
								->setCellValue('L'.$i, $emple->Bec)
								->setCellValue('M'.$i, $emple->Comentarios)
								->setCellValue('N'.$i, $emple->user_login)
								->setCellValue('O'.$i, $emple->hoy);				
					$i++;
				}
/////////////////////////////////////////////////////////////////////////////////
////// http://www.codedrinks.com/crear-un-reporte-en-excel-con-php-y-mysql/ /////
/////////////////////////////////////////////////////////////////////////////////
				
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

					
			$objPHPExcel->getActiveSheet()->setTitle('Prueba1');	
			$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
			//$ruta="C:/GestorDeVacaciones";
			// $workbook = new Spreadsheet_Excel_Writer($objPHPExcel,'prueba1.xls');
			// $worksheet = $workbook->addWorksheet('My first worksheet');	
			header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="prueba1.xls"');
				//header('Cache-Control: max-age=0');
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save('pruebaReal.xlsx');
			exit;
				//We still need toC explicitly close the workbook
				//$workbook->close();
	?>
</div>


		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<button type="submit"class="btn btn-success">
					<span class="glyphicon glyphicon-home"></span>
					<a href="index.php" style="color:white"> Pagina Principal </a>
					<span class="glyphicon glyphicon-home"></span>
				</button>
			</div>
		</div>
	</div>

</div>
<?php 
include_once "pie.php";
?>