<?php 
	function registrar($nombre, $dni, $ap1, $ap2, $dire, $cp, $a, $ctv){
		global $dwes;

		$dwes->autocommit(FALSE);

		$cons="INSERT INTO registro (dni,nombre,apellido1,apellido2,direccion,cp,autonoma,ctv ) VALUES ('$dni','$nombre','$ap1','$ap2','$dire',$cp,'$a','$ctv')";

		$resultado = $dwes->query($cons);

		if(!$dwes->commit()){
?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>FALLO</strong> Intentelo de nuevo Fallo en el servidor
			</div>
<?php 
    		exit();
		}else{
?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Se ha registrado correctamente</strong>
			</div>";
<?php 
		}
	}

 ?>