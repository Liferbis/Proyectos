<?php  
	$localhost="localhost";
	$usu="root";
	$ctv="";
	$bd="dwes";

	$dwes = new mysqli($localhost, $usu , $ctv, $bd);
	$info=mysqli_get_server_info($dwes);

	if(!$dwes){
		echo "<p>error $dwes->connect_errno</p>";
	}else{
		echo "<div class='alert alert-info' role='alert'>
  				<p>Conexion correcta a base de datos DWES  <small>( $info )</small></p>
			   </div>";
			}
?>