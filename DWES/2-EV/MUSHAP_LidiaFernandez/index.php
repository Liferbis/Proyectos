<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Geocoding service</title>
  <link rel="stylesheet" href="estilo.css">

  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
  <script>
  var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(43.4647222, -3.8044444);
    var mapOptions = {
      zoom: 8,
      center: latlng
    }
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  }

  function codeAddress() {
    var address = document.getElementById('address').value;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }

  function codeAddres($cod) {
    var address = $cod;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }

  function embalses() {
    var cod=["Embalse del ebro","Embalse de Alsa", "Embalse de Requejada", "Embalse de Aguilar"];
    for (var i = 0; i < cod.length; i++) {
      var address = cod[i];
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[i].geometry.location);
          var marker = new google.maps.Marker({
            map: map,
            position: results[i].geometry.location
          });
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
    }
  }



  google.maps.event.addDomListener(window, 'load', initialize);

  </script>
  <!-- Bootstrap CSS -->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div id="panel">
        <input id="address" type="textbox" value="Cantabria, España">
        <input type="button" value="Geocode" onclick="codeAddress()">
        <input type="button" value="Limpiar marcadores" onclick="initialize()">
      </div>
      <div class="row">
        <div class="col-md-4">
          <ul>
            <li>
              <input type="button" value="Embalse del Ebro" onclick="codeAddres('Embalse del Ebro')">
            </li>
            <li>
              <input type="button" value="Embalse de Alsa" onclick="codeAddres('Embalse de Alsa')">
            </li>
            <li>
              <input type="button" value="Embalse el Juncal" onclick="codeAddres('embalse el juncal, España')">
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>
              <input type="button" value="Embalse de Requejada" onclick="codeAddres('Embalse de Requejada')">
            </li>
            <li>
              <input type="button" value="Embalse de Aguilar" onclick="codeAddres('Embalse de Aguilar')">
            </li>
            <li>
              <input type="button" value="Embalse de Palombera" onclick="codeAddres('Embalse de Palombera')">
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>
              <input type="button" value="Embalse de la Cohilla" onclick="codeAddres('Embalse de la Cohilla')">
            </li>
            <li>
              <input type="button" value="Embalse los Corrales de Buelna" onclick="codeAddres('embalse los Corrales de Buelna, España')">
            </li> 
          </ul>
        </div>
      </div>

  <div id="map-canvas"></div>
  <!-- jQuery -->
  <script src="//code.jquery.com/jquery.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>