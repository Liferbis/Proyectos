<?php  
	$localhost="localhost";
	$usu="root";
	$ctv="";
	$bd="funicular";

	$dwes = new mysqli($localhost, $usu , $ctv, $bd);
	$info=mysqli_get_server_info($dwes);

	if(!$dwes){
		echo "<p>error $dwes->connect_errno</p>";
	}


	

?>