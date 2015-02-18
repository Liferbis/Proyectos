
						<tr>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Fecha Inicio</h3>
								</div>
								<div class="col-xs-12 col-sm4 col-md-4 col-lg-4">
									<input type="date" name="" id="input" class="form-control" value="" required="required" title="">
									<p>
										<div class="checkbox">
											Medio Dia
											<input type="checkbox" value="medio1">
										</div>
									</p>
								</div>
							</div>
						</tr>
						<hr>
						<tr>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<h3>Fecha Fin</h3>
								</div>
								<div class="col-xs-12 col-sm4 col-md-4 col-lg-4">
									<input type="date" name="" id="input" class="form-control" value="" required="required" title="">
									<p>
										<div class="checkbox">
											Medio Dia
											<input type="checkbox" value="medio2">
										</div>
									</p>
								</div>
							</div>
						</tr>
						<hr>
						<tr >
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h3>Tipo:</h3>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<select name="" id="input" class="form-control" required="required">
										<option value="">-- Selecciona Tipo --</option>
										<option value="vacaciones">Vacaciones	</option>
										<option value="pr">Permiso Retribuido</option>
										<option value="pnr">Permiso no retribuido</option>
										<option value="bec">Baja enfermedad comun</option>
										<option value="bal">Baja accidente laboral</option>
									</select>
								</div>
							</div>
						</tr>
						<hr>
						<tr>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<button type="submit" name="aceptar" value="0" class="btn btn-success">Aceptar</button>
								<button type="submit" name="aceptar" value="1" class="btn btn-success">Aceptar y solicitar</button>
								<button type="submit" name="aceptar" value="2" class="btn btn-success">Cancelar</button>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								
							</div>
							
						</tr>
					</form>
					<?php if(isset($_POST["aceptar"])){ 
							if($_POST["aceptar"]==0){
								
								$cod_emple=$_POST["empleado"];
								echo "cod_emple: ".$cod_emple;

								$emp=BD::DameEmpleado($cod_emple);
								foreach ($emp as $emple) {
									$nombre=$emple->nombre;
									$apellido1=$emple->apellido1;
								}
								$fecha=date('Y-m-d');
								$ruta="C:\GestorDeVacaciones\ ".$nombre."_".$apellido1."_".$fecha;
								if(!mkdir($ruta, 0600, true)){
									die('Fallo en la ruta de la carpeta');
								}else{
									die('Creado correctamente');
								}
							}else if($_POST["aceptar"]==1){
								require_once "informe.php";
							}else if ($_POST["aceptar"]==2){
								header("Location: index.php");
							}

					} ?>
					
				</tbody>
			</table>					
		</div>
	</div>
		

<?php 
	require_once "pie.php";
 ?>