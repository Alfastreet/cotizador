<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Geolocalización">
    <title>Geolocalización</title>
<script>
//<![CDATA[
var watchId;
/* Controlamos los tiempos de espera mínimo y máximo de nuestra geolocalización respecto a la petición anterior */
var PositionOptions = {
    timeout: 5000,
    maximumAge: 60000,
    enableHighAccurace: true // busca la mejor forma de geolocalización (GPS, tiangulación, ...)
};
/* Utiliza la geolocalalización solamente cuando se solicita.
Con PositionOptions aseguramos que la posición no corresponde a caché */
function initiate_geolocation() {
  if (navigator.geolocation) {
    browserSupportFlag = true;
    var watchId = navigator.geolocation.getCurrentPosition(successCallback, errorCallback, PositionOptions);
  } else {
    document.getElementById("mensaje").innerHTML = "Lo sentimos pero el API de Geolocalización de HTM5 no está disponible para su navegador";
  }
}
/* Reitera la geolocalización hasta que la detenemos */
function watch_geolocation() {
  if (navigator.geolocation) {
    browserSupportFlag = true;  // Para optimizarlo en los navegadores (mis dudas con IE)
    var watchId = navigator.geolocation.watchPosition(successCallback, errorCallback);
  } else {
    document.getElementById("mensaje").innerHTML = "Lo sentimos pero el API de Geolocalización de HTM5 no está disponible para su navegador";
  }
}
/* Detenemos la geolocalización reiterada */
function clear_watch_geolocation() {
  if (navigator.geolocation) {
    navigator.geolocation.clearWatch(watchId);
  } else {
    document.getElementById("mensaje").innerHTML = "Lo sentimos pero el API de Geolocalización de HTM5 no está disponible para su navegador";
  }
}
 
function successCallback(pos) {
  var timestamp = document.getElementById('timestamp');
  var date = new Date(pos.timestamp);
  /* Hacemos legible la fecha a nuestro léxico. 
  timestamp nos daría una lectura como ésta: Wed Jun 18 2014 09:46:21 GMT+0200  */
  var mes = date.getMonth() + 1;
  if (mes < 10) {
    mes = "0" + mes
  }
  var dia = date.getDate();
  if (dia < 10) {
    dia = "0" + dia
  }
  var anyo = date.getFullYear();
  var hora = date.getHours();
  if (hora < 10) {
    hora = "0" + hora
  }
  var minuto = date.getMinutes();
  if (minuto < 10) {
    minuto = "0" + minuto
  }
  var segundo = date.getSeconds();
  if (segundo < 10) {
    segundo = "0" + segundo
  }
  var timestamp = document.getElementById('timestamp');
  timestamp.innerHTML = dia + "/" + mes + "/" + anyo + ", " + hora + ":" + minuto + ":" + segundo;
  var latitude = document.getElementById('latitude');
  latitude.innerHTML = pos.coords.latitude.toFixed(6);  // Limito decimales de coordenadas a 6 
  var longitude = document.getElementById('longitude');
  longitude.innerHTML = pos.coords.longitude.toFixed(6);
  /* La altitud sobre la superficie (google maps dispone de medición "respecto a nivel de mar")
  Solo será medible desde avión, paramente ... */
  var altitude = document.getElementById('altitude');
  altitude.innerHTML = pos.coords.altitude.toFixed(6);
  var accuracy = document.getElementById('rangoerror');
  accuracy.innerHTML = pos.coords.accuracy;
  /* Sentido y velocidad si la medición se hace desde un dispositivo en movimiento */
  var heading = document.getElementById('sentido');
  heading.innerHTML = pos.coords.heading;
  var speed = document.getElementById('velocidad');
  speed.innerHTML = pos.coords.speed;
};
/* Posibles errores que se pueden producir en la geolocalización */
function errorCallback(error) {
  var appErrMessage = null;
  if (error.core == error.PERMISSION_DENIED) {
    appErrMessage = "El usuario no ha concedido los privilegios de geolocalización"
  } else if (error.core == error.POSITION_UNAVAILABLE) {
    appErrMessage = "Posicion no disponible"
  } else if (error.core == error.TIMEOUT) {
    appErrMessage = "Demasiado tiempo intentando obtener la localización del usuario."
  } else if (error.core == error.UNKNOWN) {
    appErrMessage = "Error desconocido"
  } else {
    appErrMessage = "Error insesperado"
  }
  document.getElementById("mensaje").innerHTML = appErrMessage
};
//]]>
</script>
  </head>
  <body>
  <body id="page-top">
</div>
<?php echo $this->element('menu'); ?>
          <!-- DataTables Example -->
          <div class="card mb-3">

            <div class="card-body">
              <div class="table-responsive">
<div class="container">
  <div class="visits form">
<?php echo $this->Form->create('Visit'); ?>
	<fieldset>
		<legend><?php echo __('Iniciar visita tecnica programada '); ?></legend>
	<?php 
	$hoy = date("Y-m-d H:i:s");   
	echo $this->Form->hidden('start',array('value'=>$hoy))
	?>
	Comentarios:
	<?php	
		 echo $this->Form->input('comment', array('style'=>'width:700px; height:100px;','type' => 'textarea', 'label' => ''));
	?>
	*Recuerde estar en el sitio de la visita antes de iniciar. 
	<!--<section style="text-align:left;">
	<br>
	<button type="button" class="button" onclick="initiate_geolocation();">Ver mi posición</button>
	<br>
	Fecha: <span style="color:#FF00AA;" id="timestamp"></span>
	<br>
	Latitud: <span style="color:#FF00AA;" id="latitude"></span>
	<br>
	Longitud: <span style="color:#FF00AA;" id="longitude"></span>

      <div id="mensaje" style="color:#FF0000;"></div>
    </section>
	</fieldset>
	<br><br>
	
	
	
	
	
	<!DOCTYPE html>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<title>Google Maps Geoposicionamiento</title> 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<style> #map { width: 100%; height: 300px; border: 1px solid #d0d0d0; } </style> 
<script> 
function localize() { 
if (navigator.geolocation) { 
navigator.geolocation.getCurrentPosition(mapa,error); 
} else { 
alert('Tu navegador no soporta geolocalizacion.'); 
} 
} 
function mapa(pos) { /************************ Aqui están las variables que te interesan***********************************/ 
var latitud = pos.coords.latitude; 
var longitud = pos.coords.longitude; 
var precision = pos.coords.accuracy; 
var contenedor = document.getElementById("map") 

document.getElementById("lti").innerHTML=latitud;
document.getElementById("lgi").innerHTML=longitud;	
document.getElementById("psc").innerHTML=precision;	

var centro = new google.maps.LatLng(latitud,longitud); 
var propiedades = { zoom: 15, center: centro, mapTypeId: google.maps.MapTypeId.ROADMAP }; 
var map = new google.maps.Map(contenedor, propiedades); 
var marcador = new google.maps.Marker({ position: centro, map: map, title: "Tu posicion actual" }); 
} 


function error(errorCode) { 
if(errorCode.code == 1) 
	alert("No has permitido buscar tu localizacion") 
else if (errorCode.code==2) 
	alert("Posicion no disponible") 
else 
	alert("Ha ocurrido un error") 
} 
</script> 

</head> 
<body onLoad="localize()"> 

<h1>Google Maps Geoposicionamiento</h1>
<p>Latitud: <span id="lti"></span></p>
<p>Longitud: <span id="lgi"></span></p>
<p>Precisi&oacute;n: <span id="psc"></span></p>	
<div id="map" ></div> 
</body> 
</html>



$latphp = $_COOKIE["latcookie"];
$lonphp = $_COOKIE["loncookie"];
echo $latphp."<br>".$lonphp;
	
	-->
<font color="gray">Ubicación regístrada con éxito</font>
<?php echo $this->Form->end(__('Iniciar visita ahora')); ?>
<br><br><br><br>
</div>


  </body>
</html>

