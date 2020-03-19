<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css" />

      <title> Weather </title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   </head>

   <body>
   <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
<h1><div id="temp"></div><div id="minutely"></div></h1>
      <h2><div id="location"></div></h2>
      <div id="map" style="width:800px;height:400px; text-align: center; display: inline-block">A</div>

</div>
            <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
   
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx1MD1zTTQTfcLvaUlk2vngDsbgLEx5Cc&callback=myMap&callback=initMap">
    </script>
    <?php
    $myfile = fopen("logs.txt", "a") or die("Unable to open file!");
    $txt = "user id date";
    fwrite($myfile, "\n". $txt);
    fclose($myfile);
    ?>
   </body>
   <script src="app.js"></script>
</html> 
