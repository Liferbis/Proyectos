<?php 
	$wsdl="http://localhost/proyectos/DWES/2-EV/Unidad8/hoja-03/wsdl/producto/wsdlproductos.xml";
	$uri="http://127.0.0.1/wsdl";


try{
	$cliente=new SoapClient($wsdl,array('trace'=>1));
	$precio=$cliente->getPrecio(1);
	echo "<br>El precio del articulo con codigo 1 es: ".$precio;
	
	$articulo=$cliente->getProducto(1);
	echo "<br>El articulo con codigo 1 es: ";
	var_dump($articulo);
	
	$productos=$cliente->getProductos();
	echo "<br>Todos los articulos: ";
	var_dump($productos);

	$palabra=$cliente->busqueda("micro");
	echo "<br>El/los articulo/s que contienen la palabra 'micro' son: ";
	var_dump($palabra);

	$produc=$cliente->getMayorPrecio();
	echo "<br>El articulo mas caro es: ";
	var_dump($produc);

}catch(SoapFault $e){
	print $e->getMessage();
}


 ?>