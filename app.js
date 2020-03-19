function weather() {

  var location = document.getElementById("location");
  var apiKey = '114212bc122609f21afc3bb8d58c844f'; // PLEASE SIGN UP FOR YOUR OWN API KEY
  var url = 'https://api.forecast.io/forecast/';

  navigator.geolocation.getCurrentPosition(success, error);

  function success(position) {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;

    location.innerHTML = 'Latitude is ' + latitude + '° <br> Longitude is ' + longitude + '°';

     $.getJSON(url + apiKey + "/" + latitude + "," + longitude + "?callback=?", function(data) {
      $('#temp').html(data.currently.temperature + '° F');
      $('#minutely').html(data.minutely.summary);
    });
  }

 

  function error() {
    location.innerHTML = "Unable to retrieve your location";
  }

  location.innerHTML = "Locating...";
}
function manual() {
  var location = document.getElementById("location");
  var apiKey = '114212bc122609f21afc3bb8d58c844f'; // PLEASE SIGN UP FOR YOUR OWN API KEY
  var url = 'https://api.forecast.io/forecast/';
  var Lat = document.getElementById("Latitude").value;
  var Lng = document.getElementById("Longitude").value;
  location.innerHTML = 'Latitude is ' + Lat + '° <br> Longitude is ' + Lng + '°';

  $.getJSON(url + apiKey + "/" + Lat + "," + Lng + "?callback=?", function(data) {
   $('#temp').html(data.currently.temperature + '° F');
   $('#minutely').html(data.minutely.summary);
 });
}


weather();