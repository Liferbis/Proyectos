<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Geocoding service</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      #panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
      #locat {
        background: transparent;
        position: left;
        width: 25%;
        top: 5px;
        /*margin-left: -180px;*/
        z-index: 5;
        padding: 5px;
      }
    </style>
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

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="panel">
      <input type="button" value="Llanes, Cantabria" onclick="codeAddres('Llanes, Cantabria')">
      <input type="button" value="Campuzano, Cantabria" onclick="codeAddres('Campuzano, Cantabria')">
      <input id="address" type="textbox" value="Cantabria, España">
      <input type="button" value="Geocode" onclick="codeAddress()">
    </div>
    <div id="locat">
      <input type="button" value="Mostrar los marcadores" onclick="codeAddress()">
      http://www.urbanity.es/2013/top-10-embalses-mas-grandes-de-espana-tras-un-marzo-historico-en-lluvias/
      https://developers.google.com/maps/documentation/javascript/examples/
    </div>
    <div id="map-canvas"></div>
  </body>
</html>