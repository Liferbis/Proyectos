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
	//////// estilo para la hoja de excel //////////////////////////////
	//inicio estilos
	$titulo = new PHPExcel_Style(); //nuevo estilo
	$titulo->applyFromArray(
	  array('fill' => array( //relleno de color
	    		'type' => PHPExcel_Style_Fill::FILL_SOLID,
	    		'color' => array('argb' => 'FFCCFFCC')
	    ),'alignment' => array( //alineacion
	    		'wrap' => false,
	    		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
	    ),'font' => array( //fuente
	    		'bold' => true,
	    		'size' => 20
	    )
	));
	 
	$subtitulo = new PHPExcel_Style(); //nuevo estilo
	 
	$subtitulo->applyFromArray(
	  array('fill' => array( //relleno de color
	    		'type' => PHPExcel_Style_Fill::FILL_SOLID,
	    		'color' => array('argb' => 'FFCCFFCC')
	    ),'alignment' => array( //alineacion
	      		'wrap' => false,
	      		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
	    ),'borders' => array( //bordes
		        'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
		        'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
		        'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
		        'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
	    )
	));

	$subtitulo1 = new PHPExcel_Style(); //nuevo estilo
	 
	$subtitulo1->applyFromArray(
	  array('fill' => array( //relleno de color
	    		'type' => PHPExcel_Style_Fill::FILL_SOLID,
	    		'color' => array('argb' => 'FFCCFFCC')
	    ),'alignment' => array( //alineacion
	      		'wrap' => false,
	      		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
	    ),'borders' => array( //bordes
		        'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
		        'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
		        'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
		        'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
	    )
	));
	 
	$rellenado = new PHPExcel_Style(); //nuevo estilo
	 
	$rellenado->applyFromArray(
	  array('borders' => array(//bordes
	    		'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
	    		'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
	    		'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
	    		'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
	    ),'alignment' => array( //alineacion
	      		'wrap' => false,
	      		'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER
	    )
	));
	//fin estilos


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

			$objPHPExcel->getActiveSheet()->setSharedStyle($titulo, 'A1:O1');
			$objPHPExcel->getActiveSheet()->setSharedStyle($subtitulo, 'A3:O3');
			$objPHPExcel->getActiveSheet()->getStyle("A3:O3")->getFont()->setBold(true); //negrita
			$objPHPExcel->getActiveSheet()->setSharedStyle($subtitulo1, 'A4:O4');

 				$i = 5; //Numero de fila donde se va a comenzar a rellenar
 				foreach ($empleados as $emple) {
 					$nombre=$emple->nombre;
 					$apellido1=$emple->apellido1;
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

					$objPHPExcel->getActiveSheet()->setSharedStyle($rellenado, 'A'.$i.':O'.$i);		
					$i++;
				}

				foreach (range('A', 'O') as $columnID) {
				  //autodimensionar las columnas
				  $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);  
				}

					
			$objPHPExcel->getActiveSheet()->setTitle('Gestor');	
			$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
			//$ruta="C:/GestorDeVacaciones";
			// $workbook = new Spreadsheet_Excel_Writer($objPHPExcel,'prueba1.xls');
			// $worksheet = $workbook->addWorksheet('My first worksheet');	
			header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="prueba.xls"');
				//header('Cache-Control: max-age=0');
			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$dir="C:/GestorDeVacaciones/".$nombre."_".$apellido1;
            $fecha=date('Y-m-d');//'2015-01-01';
            
            if(file_exists($dir)){
                $ruta=$dir."/".$nombre."_".$apellido1."_".$fecha;
                echo $ruta;
                $folder=mkdir($ruta, 0755, true);
                if(!$folder){
                    die('Fallo en la ruta de la carpeta');
                }else{
                    die('Creado correctamente');
                }
            }else{
                $dir="C:/GestorDeVacaciones/".$nombre."_".$apellido1;
                $ruta=$dir."/".$nombre."_".$apellido1."_".$fecha;
                $folder=mkdir($ruta, 0755, true);
                if(!$folder){
                    echo 'Fallo en la ruta de la carpeta';
                }else{
                    echo 'Creado correctamente';            
                }
            }
			//$objWriter->save($ruta.'pruebaReal.xlsx');
			//exit;
				//We still need toC explicitly close the workbook
				//$workbook->close();
	?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3>El archivo creado esta en la siguiente ruta:</h3>
			<h3>
				<?php echo $ruta ?>
			</h3>
			<h4>Copiela y peguela en el explorador de carpetas</h4>
			<img src="include/nav.JPG" class="img-responsive" alt="Image">
		</div>
	</div>
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

			$objWriter->save($ruta.'/pruebaReal.xlsx');
include_once "pie.php";
?>