<?php 
include_once "header.php";
?>
<div >
			<table class="table table-responsive table-hover" style="border:1px">
				<thead>
					<tr>
						<th class="text-center" colspan="3"><h3>Marca la opcion que deseas que se genere en formato .xls (excel)</h3></th>
					</tr>
				</thead>
				<tbody>
					<form action="" method="POST" role="form">
						<tr>
							<td colspan="3">
								<input type="radio" name="excel" value="0" checked="checked">
								Generar TODO de TODOS
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="radio" name="excel" value="1">
								Generar TODO de un empleado especifico
							</td>
							<td>
								<input type="int" name="num1" placeholder="codigo de empleado">
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<br>
							</td>
						</tr>
						<tr> 
							<td >
								Seleccione tipo:
							</td>
							<td colspan="2">
								<select name="tipo">
									<option>---- Seleccione tipo ----</option>
									<option value="vaca">Vacaciones</option>
									<option value="pnr">Permiso no retribuido</option>
									<option value="pr">Permiso retribuido</option>
									<option value="bec">Baja enfermedad comun</option>
									<option value="bal">Baja accidente laboral</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<input type="radio" name="excel" value="2">
								Generar tipo de TODOS
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="radio" name="excel" value="3">
								Generar tipo de un empleado especifico   
							</td>
							<td>
								<input type="int" name="num2" placeholder="codigo de empleado">
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<br>
						</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="radio" name="excel" value="4">
								Generar de un año especifico TODOS los empleados
							</td>
							<td>
								<input type="int" name="anio1" placeholder="Anio AAAA">
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" name="excel" value="5">
								Generar de un año especifico un empleado especifico 
							</td>
							<td>
								<input type="int" name="anio2" placeholder="Anio AAAA">
							</td>
							<td>
								<input type="int" name="num3" placeholder="codigo de empleado">
							</td>
						</tr>
						<tr>
							<td colspan="3" class="text-center">
								<button type="submit" class="btn btn-primary">GENERAR</button>
							</td>
						</tr>
					</form>
				</tbody>
			</table>
		</div>
		<?php 
include_once "pie.php";
?>