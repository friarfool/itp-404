<div id="map" height="300" width="300"></div>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
	var lat = 0;
	var longt = 0;
	var addy;
	(function() {

		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
			lat = position.coords.latitude;
			longt = position.coords.longitude;
			var current = new google.maps.LatLng(lat,longt);

			var myOptions = {
				zoom: 5,
				center: current,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			var map = new google.maps.Map(document.getElementById("map"), myOptions);

			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(lat,longt),
				title: "Your Current Position"
			});
			
			marker.setMap(map);	

			var geocoder = new google.maps.Geocoder();
			var param1 = {
				'location': current
			};

			geocoder.geocode(param1, function(results, status) {
			var infowindow = new google.maps.InfoWindow({
			content: "Your current location: "+results[0].formatted_address
			});

			google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map, marker);
		});

});


});

} 

})();
</script>