<?php 
	$wsdl="http://localhost/proyectos/DWES/2-EV/Fernandez_Lidia/Ejercicio%202/MediaMaratonWebService.xml";

	$uri="http://127.0.0.1";


try{
	$cliente=new SoapClient($wsdl,array('trace'=>1));
	$runer=$cliente->getTiempo('33333333P');
	if($runer->tiempo>0){
			$t=(float)$runer->tiempo/60;
		}else{
			$t=0;
		}
	echo "<ul>";
	echo "<li>Mostrar el <a target='_blank' href='MediaMaratonWebService.xml'> WSDL.xml</a></li>";
	echo "</ul>";
	echo"<hr>";
	echo "<br>El runner con el numero de dni 3333333Pes: ";
	echo "<ul>
				<li>Nombre: ".$runer->nombre.
					"<ul>
						<li>Dni: ".$runer->dni."</li>
						<li>Sexo: ".$runer->sexo."</li>
						<li>Talla de Camiseta: ".$runer->talla."</li>
						<li>Dorsal: ".$runer->dorsal."</li>
						<li>Tiempo: ".$t." minutos</li>
					</ul>
				</li>
				</ul>";
	echo "<br> ";


	echo"<hr>";

	// $runner=$cliente->getMejor();
	// foreach ($runner as $r) {
	// 	if($r->tiempo>0){
	// 		$t=(float)$r->tiempo/60;
	// 	}else{
	// 		$t=0;
	// 	}
	// 	echo "<ul>
	// 			<li>Nombre: ".$r->nombre.
	// 				"<ul>
	// 					<li>Dni: ".$r->dni."</li>
	// 					<li>Sexo: ".$r->sexo."</li>
	// 					<li>Talla de Camiseta: ".$r->talla."</li>
	// 					<li>Dorsal: ".$r->dorsal."</li>
	// 					<li>Tiempo: ".$t." minutos</li>
	// 				</ul>
	// 			</li>
	// 			</ul>";
	// echo "<br> ";
	// }


}catch(SoapFault $e){
	print $e->getMessage();
}


?>