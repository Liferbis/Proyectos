<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" />
  <meta charset="utf-8">
  <title>Parque Natural Sierra Bicuerca - Reservas</title>
  <link href="estilos.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
  <div class="red_arriba">
    <div></div>
  </div>

  <h1>Parque Natural Cabarceno</h1>

  <div class="contenido">
    <div class="contenido_abajo">
      <h2>Reservas</h2>
      <p>El acceso al parque es libre y gratuito, siempre que se respeten las normas de conducta y preservaci&oacute;n del entorno. </p>
      <p>No obstante, tambi&eacute;n disponemos de servicios adicionales, como visita guiada  o aula educativa para ni&ntilde;os.</p>
      <h3>Horarios y reservas</h3>
      <table border="0" cellspacing="3" cellpadding="3" class="reservas">
        <tr>
          <th colspan="5">Visitas con gu&iacute;a:</th>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2" class="titulo">Temporada de Verano</td>
          <td colspan="2" class="titulo">Temporada de Invierno</td>
        </tr>
        <tr>
          <td class="titulo">Horarios:</td>
          <td colspan="2">10:00 - 13:00<br />
            16:00 - 19:00</td>
          <td colspan="2">11:00 -14:00</td>
          </tr>
        <tr>
          <td rowspan="2" class="titulo">Tarifas:</td>
          <td>Individual:</td>
          <td>Grupos:</td>
          <td>Individual:</td>
          <td>Grupos:</td>
          </tr>
        <tr>
          <td>5 &euro; persona</td>
          <td>3 &euro; persona</td>
          <td>4 &euro; persona</td>
          <td>2 &euro; persona</td>
        </tr>
      </table>

      <table border="0" cellspacing="3" cellpadding="3" class="reservas">
        <tr>
          <th colspan="3">Aula educativa (s&oacute;lo grupos):</th>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="titulo">Temporada de Verano</td>
          <td class="titulo">Temporada de Invierno</td>
        </tr>
        <tr>
          <td class="titulo">Horarios:</td>
          <td>9:00 - 10:00<br />
            15:00 - 16:00</td>
          <td>10:00 - 11:00</td>
        </tr>
        <tr>
         <td class="titulo">Tarifas:</td>
         <td>25 &euro;</td>
         <td>25 &euro;</td>
        </tr>
      </table>

      <h3>Contacto</h3>
      <p>Si est&aacute;s pensando visitar el parque con un grupo, por favor, rellena este formulario:</p>
      </br>
      <form action="enviar_reservas.php" method="POST" role="form">
        <table border="0" cellspacing="3" cellpadding="3" class="reservas">
          <tr>
            <td>Nombre: </td>
            <td>
              <input type="text" name="name" id="input" class="form-control" >
            </td>
          </tr>
          <tr>
            <td>E-mail: </td>
            <td>
              <input type="text" name="mail" id="input" class="form-control">
            </td>
          </tr>
          <tr>
            <td>Fecha de la visita: </td>
            <td>
              <input type="text" name="fecha" class="form-control" > (DD/MM/AAA)
            </td>
          </tr>
          <tr>
            <td>N&uacute;mero de personas: </td>
            <td>
              <input type="numero" name="num" class="form-control">
            </td>
          </tr>
          <tr>
            <td>Edad del grupo: </td>
            <td>
              <div class="radio">
                <label>
                  <input type="radio" name="edad" id="input">
                  De 5 a 8
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="edad" id="input" >
                  De 9 a 14
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="edad" id="input" >
                  De 15 a 18
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="edad" id="input">
                  Adultos
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="2"> 
              <div class="radio">
                <label>
                  <input type="checkbox" id="input" name="nenes">
                  Deseamos asistir al aula educativa (solo ni&ntilde;os)
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>Observaciones: </td>
            <td>  </td>
          </tr>
          <tr>
            <td colspan="2"> 
              <textarea name="textarea" rows="5" cols="50"></textarea>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="right" > 
              <button  type="submit" class="btn btn-large btn-block btn-default">Enviar</button>
            </td>
          </tr>
        </table>
      </form>

    </div>
  </div>

<div class="red_abajo"><div></div>

</body>
</html>