<?php 
		$f="2014-10-24";
		$datetime2=date("Y-m-d");
		$datetime1=explode("-", $f);
		var_dump( $datetime1->diff($datetime2));
		//echo $interval->format('%R%a días');
 ?>