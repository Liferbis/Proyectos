<?php 
try{


	$cliente= new SoapClient("http://www.webservicex.net/whois.asmx?WSDL", array("trace"=>1));
	$parametros=array("HostName"=>"iesmiguelherrero.com");
	$data=$cliente->GetWhoIS($parametros);
	//print nl2br($data->GetWhoISResult);
}catch (SoapFault $error){
	echo $error;
}

	print nl2br($cliente->__getLastResponse());
 ?>