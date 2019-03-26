   function initialiseMap() {  
              var directionsService = new google.maps.DirectionsService;
              var directionsDisplay = new google.maps.DirectionsRenderer;
 
              var map= new google.maps.Map(document.getElementById("map1"), {
                zoom: 7,
                center: {lat: 51.449632, lng: -0.949697},
                disableDefaultUI: true
              });
              directionsDisplay.setMap(map);
              directionsService.route({
                origin: {lat: 51.449632, lng: -0.949697},  // Haight.
                destination: {lat: 51.441686, lng: -0.947925},  // Ocean Beach.
                travelMode: 'BICYCLING'
              }, function(response, status) {
                if (status === 'OK') {
                  directionsDisplay.setDirections(response);
                } else {
                  window.alert('Directions request failed due to ' + status);
                }
              });
        }
   