<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta chaeset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<link rel="stylesheet" href="../libreriaJQ/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">

	<script type="text/javascript" src="../libreriaJQ/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="../libreriaJQ/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
		
</head>
<body>
	<!--  //////////////////// MENU PAGE//////////////////////////-->
  <div data-role="page" id="two">

    <div data-role="panel" id="navpanel" data-theme="b" data-display="overlay" data-position="left">
      <div data-role="controlgroup" data-corners="false">
        <a href="#two" data-icon="bars" data-role="button">Men&uacute;</a>
        <a href="#ordentrabajo" data-icon="danger" data-role="button">Ordenes de Trabajo</a>
        <a href="AgendaVacaciones" data-role="button" data-icon="calendar" >Vacaciones</a>
        <a href="#busqueda" data-role="button" data-icon="search"> B&uacute;squeda </a>
      </div>
    </div>

    <div data-role="content" data-position="fixed" data-theme="b" align="center"></div>
    <div data-role="header" data-position="fixed" data-theme="b" align="center">
      <a  data-icon="bars" class="ui-btn-left bars-button btn_cab" style="margin-top:10px;" href="#navpanel" ><span>Men&uacute;</span></a>
      <img src="images/logo.png" height="50" width="165" alt="main logo" vspace="2"/>
      <a id="bars-button" data-icon="power" class="ui-btn-right btn_cab" style="margin-top:10px;"><span>Conectar</span></a>
    </div>
    <!--                  
    <div data-role="content" class='login_prin'>
      <a href="#ordentrabajo" data-role="button" data-icon="clipboard" class='title_span' data-theme="b"> &Oacute;RDENES DE TRABAJO </a>
      <a href="#gastos" data-role="button" data-icon="euro" class='title_span' data-theme="b">  GASTOS </a>
      <a href="" data-role="button" data-icon="calendar" class='title_span vacaciones_url' data-theme="b"> VACACIONES </a>
      <a href="#busqueda" data-role="button" data-icon="search" class='title_span' data-theme="b"> B&Uacute;SQUEDA </a>
    </div>

    <div data-role="footer" data-theme="b">Usuario 
    </div>
    <div style='display:none;' id='id_us'>Id_us</div>
-->
	<div data-role="footer" data-theme="b">Usuario 
    </div>
  </div> 
    <!--  //////////////////// END MENU PAGE//////////////////////////-->
</body>
</html>