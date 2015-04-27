 function initialize() {
        var loc_GM = new google.maps.LatLng (43.7057,-92.5721);
		var mapOptions = {
          //center: { lat: 43.705796, lng: -92.572121},
		  center: loc_GM,
          zoom: 10
        }
        var map = new google.maps.Map(document.getElementById('mapDiv'), mapOptions);
     
	 var marker = new google.maps.Marker({
		position: loc_GM,
		map: map,
		title: 'Grand Meadow' 
	  });
 }
      google.maps.event.addDomListener(window, 'load', initialize);
	  