<!doctype html>
<html>
	<head>
		<title>Paresh's Local Search App Using The Laravel MVC</title>
		<link rel="stylesheet" href="<?php echo URL::to_asset('css/default.css') ?>">
	</head>
	<body>
		<div id="container">
			<h1>What Do You Want To Eat?</h1>
				  <?php 
				  
				 if (empty($validation))
{


}
else {
				  if ($validation->errors->has('place-term'))
{
echo "<p class='tweet'>Please enter a location!</p>";

}

			  if ($validation->errors->has('search-term'))
{
echo "<p class='tweet'>Please enter a food type!</p>";

}

}
?>
			<form id="main" action="<?php echo URL::to('yelp/results'); ?>" method="get">
				<label>What?</label> <input type="text" name="search-term" size="100"><br /><br />
				<label>Where?</label> <input id="place" type="text" name="place-term" value="" size="100"><br /><br />
				<input type="hidden" id="lat" value="">
				<input type="hidden" id="longt" value="">
				<a href="#" onclick="setValue();"><b>Click to submit</b></a>			
				</form>
			<h2>Or, here's some suggestions:</h2>
			<p><a href="http://localhost:8888/ITP404-MVCpart1/mvc1/public/yelp/results?search-term=mexican&place-term=sacramento">Mexican in Sacramento</a></p>
			<p><a href="http://localhost:8888/ITP404-MVCpart1/mvc1/public/yelp/results?search-term=burgers&place-term=90007">Burgers in 90007</a></p>
			<p><a href="http://localhost:8888/ITP404-MVCpart1/mvc1/public/yelp/results?search-term=italian&place-term=san%20francisco">Italian in San Francisco</a></p>
		</div>
	
		<script>
			function setValue() {
  			  document.forms["main"].lat.value = lat;
  			  document.forms["main"].longt.value = longt;
   			  document.forms["main"].submit();
			}
	</script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script>
		var lat = 0;
		var longt = 0;
		var addy = null;
		(function() {
			if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
			lat = position.coords.latitude;
			longt = position.coords.longitude;
			var current = new google.maps.LatLng(lat,longt);
			var geocoder = new google.maps.Geocoder();
			var param1 = {
				'location': current
				};
			
			geocoder.geocode(param1, function(results, status) {
					addy = results[0].formatted_address;
					document.forms["main"].place.value = addy;
			});
		});
	} 
})();
</script>
	</body>
</html>