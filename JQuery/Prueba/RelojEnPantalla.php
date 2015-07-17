<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta chaeset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- , maximun-scale=1 NO PERMITE HACER ZOOM!!! -->
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<script language="JavaScript">
		//var mie =(navigator.appName.indexOf("Microsoft")>=0)
		
		function mueveReloj(){ 
			momentoActual = new Date() ;
		   	hora = momentoActual.getHours() ;
		   	minuto = momentoActual.getMinutes() ;
		   	segundo = momentoActual.getSeconds() ;

		   	horaImprimible = hora + " : " + minuto + " : " + segundo ;

		   	document.form_reloj.reloj.value = horaImprimible ;

		   	setTimeout("mueveReloj()",1000) ;
		}
	</script>
	<style>
		#reloj{
			display: inline;
			width: 100%;
			height: 30px;
			background: #000;
			color: #FFF;
			font-size:20px;
			font-weight: bold;
		}

		#hora{
			text-align: right;
			background: #000;
			color: #FFF;
			font-size:20px;
			font-weight: bold;
		}

		#texto{
			text-align: left;
		}
	</style>
	
</head>
<body onload="mueveReloj()"> 



<form name="form_reloj" id="reloj"> 
Vemos aquí el reloj funcionando...
<input  type="text" name="reloj" id="hora" onfocus="window.document.form_reloj.reloj.blur()"> 
</form> 

</body>
</html>