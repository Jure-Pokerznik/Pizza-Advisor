function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
      'callback=initialize';
  document.body.appendChild(script);
}

window.onload = loadScript;

var geocoder;
var directionsDisplay;
var directionsService; 
var map;
var infowindow;
var markersArray = [];

function initialize() {
      geocoder = new google.maps.Geocoder();
      infowindow = new google.maps.InfoWindow();
      var latlng = new google.maps.LatLng(46.1988, 14.9798);
  var myOptions = {
    zoom: 8,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("googleMap"),
      myOptions);
}

function showLocation(address, content)
{
      geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
              map.setCenter(results[0].geometry.location);
              map.setZoom(15);
      
              var marker = new google.maps.Marker({
                    map: map, 
                    position: results[0].geometry.location,
                    title: content
                });
                
              markersArray.push(marker);

              infowindow.setContent(content + "<br />" + address);
              infowindow.setPosition(results[0].geometry.location);
              infowindow.open(map);

    } else {
      alert("Lokacije ni bilo mogoÄe doloÄiti: " + status);
    }
  });

}