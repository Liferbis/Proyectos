<?php require_once "header.php" ?>
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
				// We give the path to our file here
				$workbook = new Spreadsheet_Excel_Writer('$ruta\prueba1.xls');

				$worksheet =& $workbook->addWorksheet('My first worksheet');

				$worksheet->write(0, 0, 'Empleado');
				$worksheet->write(0, 1, 'Vacaciones');
				$worksheet->write(0, 2, '');
				$worksheet->write(0, 3, '');
				$worksheet->write(0, 4, '');
				$worksheet->write(0, 5, '');
				$worksheet->write(0, 6, '');
				$worksheet->write(0, 7, 'Otros');
				$worksheet->write(0, 8, '');
				$worksheet->write(0, 9, 'Baja');
				$worksheet->write(0, 10, '');
				$worksheet->write(0, 11, 'Datos');
				$worksheet->write(0, 12, '');

				$worksheet->write(1, 0, 'Empleado');
				$worksheet->write(1, 1, 'Fecha Inicio');
				$worksheet->write(1, 2, 'Fecha Fin');
				$worksheet->write(1, 3, 'Dias Naturales');
				$worksheet->write(1, 4, 'Dias laborables');
				$worksheet->write(1, 5, 'Aumento Vac.');
				$worksheet->write(1, 6, 'Saldo');
				$worksheet->write(1, 7, 'Permiso Retribuido');
				$worksheet->write(1, 8, 'Permiso NO Retribuido');
				$worksheet->write(1, 9, 'Baja AL');
				$worksheet->write(1, 10, 'Baja EC');
				$worksheet->write(1, 11, 'Comentarios');
				$worksheet->write(1, 12, 'Usuario');

				$worksheet->write(0, 0, '');
				$worksheet->write(0, 1, '');
				$worksheet->write(0, 2, '');
				$worksheet->write(0, 3, '');
				$worksheet->write(0, 4, '');
				$worksheet->write(0, 5, '');
				$worksheet->write(0, 6, '');
				$worksheet->write(0, 7, '');
				$worksheet->write(0, 8, '');
				$worksheet->write(0, 9, '');
				$worksheet->write(0, 10, '');
				$worksheet->write(0, 11, '');
				$worksheet->write(0, 12, '');				
				

				// We still need to explicitly close the workbook
				$workbook->close();
				?>
		</div>
	</div>
<?php require_once "pie.php" ?>
