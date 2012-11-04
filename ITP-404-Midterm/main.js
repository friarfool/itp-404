var script = document.createElement('script');
script.src = "http://api.eventful.com/json/events/search?c=music&app_key=dFwKkF3G4VCwqqk8&page_number=1&date=Future&keywords=taylor+swift&callback=processJSONP";
document.getElementsByTagName('head')[0].appendChild(script);

function processJSONP(data) {
//console.log(data.events.event[4]);
	for (i =0; i < data.events.event.length; i++) 
		{
			var latitude = data.events.event[i].latitude;
			var longitude = data.events.event[i].longitude;
			var descrip = data.events.event[i].description;
			var titleinfo = data.events.event[i].title;

		// create a new marker object for our point
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(latitude, longitude),
				title: titleinfo
				});

// var infowindow = new google.maps.InfoWindow({
// content: descrip
// });
// 
// 
// google.maps.event.addListener(marker, 'click', function() {
// infowindow.open(map, marker);
// });



// To add the marker to the map, call setMap() on the marker object;
			marker.setMap(map);	

			}
			
	var templateString = $('#event-template').html();
	var template = Handlebars.compile(templateString);
	var jsonHTML = '';
	for (i=0; i<data.events.event.length; i++) {
		jsonHTML = jsonHTML + template(data.events.event[i]);
		$('#event-details').html(jsonHTML);
		}
}