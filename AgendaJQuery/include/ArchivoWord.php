<?php

	require_once ("BaseDeDatos.php");
	require_once("/../libreria/tcpdf/tcpdf.php");
	require_once("/../libreria/tcpdf/tcpdf_include.php");
	


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logo_example.jpg';
        $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    // public function Footer() {
    //     // Position at 15 mm from bottom
    //     $this->SetY(-15);
    //     // Set font
    //     $this->SetFont('helvetica', 'I', 8);
    //     // Page number
    //     $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    // }
}
	ob_clean();

	$emple=BD::UnEmpleado($_POST['empleado']);

	foreach ($emple as $em) {
		$codigo=$em->codigo;
		$dni=$em->dni;
		$nombre=$em->nombre;
		$apellido1=$em->apellido1;
		$apellido2=$em->apellido2;
		$localidad=$em->localidad;
		$movil=$em->movil;
		$dep=$em->comentarios;
		$saldo=$em->saldo;
	}

	$hoy=date("Y-m-d H:i:s");
	$hoy1=date("Y-m-d");
	$docu=$nombre."_".$apellido1."-".$hoy1;
	
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('l.fernandez');
	$pdf->SetTitle('Parte de Vacaciones');
	$pdf->SetSubject('Parte de Vacaciones');
	$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '' , "Usuario: ".$nombre." (".$hoy.")");


	// set header and footer fonts
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	$pdf->SetPrintFooter(false);
	//$footer1 = 'COPIA PARA EL EMPLEADO';
	//$footer2 = 'COPIA PARA LA EMPRESA';

	// set some language-dependent strings (optional)
	if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
		require_once(dirname(__FILE__).'/lang/eng.php');
		$pdf->setLanguageArray($l);
	}
	$pdf->AddPage();
			$html = '
							<table width="100%"  style="border:1px solid black">
								<thead>
									<tr colspan="2">
										<th colspan="2"><h3>SOLICITUD DE VACACIONES-PERMISOS</h3></th>
									</tr>
								</thead>
								<tbody style="text-aling:center">
									<tr colspan="2" >
										<td colspan="2" style="border:1px solid black"><h4>DATOS PERSONALES</h4></td>
									</tr>
									<tr rowspan="2">
										<td> <br/> </td>
										<td> <br/> </td>
									</tr>
									<tr>
										<td>Nombre y apellidos: </td>						
										<td>'.$nombre.' '.$apellido1.'</td>
									</tr>
									<tr>
										<td>DNI</td>
										<td>'.$dni.'</td>
									</tr>
									<tr>
										<td>Localidad de trabajo</td>
										<td>'.$localidad.'</td>
									</tr>
									<tr rowspan="2">
										<td> <br/> </td>
										<td> <br/> </td>
									</tr>
									<tr colspan="2" >
										<td colspan="2" style="border:1px solid black"><h4>VACACIONES-PERMISOS</h4></td>
									</tr>
									<tr rowspan="2">
										<td> <br/> </td>
										<td> <br/> </td>
									</tr>
									<tr>
										<td>Desde</td>
										<td>'.$_POST["FechaI"].'</td>
									</tr>
									<tr>
										<td>Hasta</td>
										<td>'.$_POST["FechaF"].'</td>
									</tr>
									<tr>
										<td>Num Dias Naturales</td>
										<td>'.$_POST["diasN"].'</td>
									</tr>
									<tr>
							<td>Num Dias Laborables</td>
							<td>'.$_POST["diasL"].'</td>
						</tr>
						<tr rowspan="2">
										<td> <br/> </td>
										<td> <br/> </td>
									</tr>
						<tr>
							<td><strong>Con el caracter de:</strong></td>
							<td><strong>';
					
								if($_POST["tipe"]=="vacaciones"){
									$html .='VACACIONES';	

								}else if($_POST["tipe"]=="PerRe"){ 

									$html .='PERMISO RETRIBUIDO';

								}else if($_POST["tipe"]=="PerNoRe"){ 

								$html .='PERMISO NO RETRIBUIDO';
 
								}

						$html .='
							</strong></td>
						</tr>
						<tr rowspan="2">
										<td> <br/> </td>
										<td> <br/> </td>
									</tr>
						<tr colspan="2" >
							<td colspan="2" style="border:1px solid black"><h4>OBSERVACIONES</h4></td>
						</tr>
						<tr colspan="2">
							<td colspan="2">'.$_POST["descrip"].'<br></td>
						</tr>
					</tbody>
				</table> ';

				$html .= '<table width=100% >
					<thead>
						<tr rowspan="2">
							<th ><br/></th >
							<th ><br/></th >
						</tr>
						<tr>
							<th >FIRMA DEL SOLICITANTE:</th>
							<th>AUTORIZADO POR:</th>
						</tr>
					</thead>
					<tbody>
						<tr rowspan="6">
							<br/><br/><br/><br/>
							<br/><br/><br/><br/>
						 </tr>
						<tr>
							<td colspan="2">COPIA PARA EL EMPLEADO &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<small style="color:gray">'.$hoy.'</small></td>
						</tr>
					</tbody>
				</table>';
	//$pdf->_footer($footer1);
	$pdf->writeHTML($html, true, 0, true, 0);
	$pdf->AddPage();
			$html ='</div>
			<hr>
			<div class="empresa">
				<table width="100%"  style="border:1px solid black">
					<thead>
						<tr colspan="2">
							<th colspan="2"><h3>SOLICITUD DE VACACIONES-PERMISOS</h3></th>
						</tr>
					</thead>
					<tbody>
						<tr colspan="2" >
							<td colspan="2" style="border:1px solid black"><h4>DATOS PERSONALES</h4></td>
						</tr>
						<tr>
							<td>Nombre y apellidos: </td>
							<td>'.$nombre." ".$apellido1.'</td>
						</tr>
						<tr>
							<td>DNI</td>
							<td>'.$dni.'</td>
						</tr>
						<tr>
							<td>Localidad de trabajo</td>
							<td>'.$localidad.'</td>
						</tr>
						<tr colspan="2" >
							<td colspan="2" style="border:1px solid black"><h4>VACACIONES-PERMISOS</h4></td>
						</tr>
						<tr>
							<td>Desde</td>
							<td>'.$_POST["FechaI"].'</td>
						</tr>
						<tr>
							<td>Hasta</td>
							<td>'.$_POST["FechaF"].'</td>
						</tr>
						<tr>
							<td>Num Dias Naturales</td>
							<td>'.$_POST["diasN"].'</td>
						</tr>
						<tr>
							<td>Num Dias Laborables</td>
							<td>'.$_POST["diasL"].'</td>
						</tr>
						<tr>
							<td>Con el caracter de:</td>';
					

								if($_POST["tipe"]=="vacaciones"){
	
								$html.='<td>
											VACACIONES
										</td>';	

								}else if($_POST["tipe"]=="PerRe"){ 

									$html.='<td>
										PERMISO RETRIBUIDO
									</td>';

								}else if($_POST["tipe"]=="PerNoRe"){ 

									$html.='<td>
										PERMISO NO RETRIBUIDO
									</td>';

								}

						$html.='</tr>
						<tr colspan="2" >
							<td colspan="2" style="border:1px solid black"><h4>OBSERVACIONES</h4></td>
						</tr>
						<tr colspan="2">
							<td colspan="2">'.$_POST["descrip"].'<br></td>
						</tr>
					</tbody>
				</table>

				<table width=100% >
					<thead>
						<tr>
							<th>FIRMA DEL SOLICITANTE:</th>
							<th>AUTORIZADO POR:</th>
						</tr>
						<tr>
							<br/><br/>
						</tr>
					</thead>
					<tbody>
						<tr rowspan="6">
							<br/><br/><br/><br/>
							<br/><br/><br/><br/>
						</tr>
						<tr>
							<td colspan="2">COPIA PARA LA EMPRESA &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<small style="color:gray">'.$hoy.'</small></td>
						</tr>
					</tbody>
				</table>';

$pdf->writeHTML($html, true, 0, true, 0);
$pdf->Output('C:/Users/l.fernandez/Downloads/prueba.pdf', 'F');