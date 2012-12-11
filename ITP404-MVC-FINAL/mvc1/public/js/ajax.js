(function() {
	$('.localtweetsdata').hide();
	$('.instapics').hide();
	$('#map').hide();
	
	$('.localtweets').on('click', function(e) {
		e.preventDefault();
		
		var food = $(this).attr('name');
		var latsearch = encodeURI($(this).parent().children('.hidden').html());
		var longtsearch = encodeURI($(this).parent().children('.hidden').attr('name'));

		var that = $(this);
		var decoded = $('<textarea/>').html(food).val();
		$.get(BASE+'/twitter/?search-term='+decoded+'&lat-term='+latsearch+'&longt-term='+longtsearch, function(data) {
		that.parent().children('.localtweetsdata').html(data);
		});
	
	$(this).parent().children('.localtweetsdata').toggle(1500);
	$(this).html('Show/Hide Recent Tweets');
	$(this).addClass('on');
	$(this).removeClass('localtweets');
	console.log($(this).attr("class"));
	})
	
	$('.localpics').on('click', function(e) {
	console.log("click");
		e.preventDefault();
		var that = $(this);
		var latsearch = encodeURI($(this).parent().children('.hidden').html());
		var longtsearch = encodeURI($(this).parent().children('.hidden').attr('name'));
		$(this).html('Show/Hide Recent Pictures');	
			$.ajax({
			url: '/ITP404-MVCpart1/mvc1/public/instagram/',
			data: {
				latbaby: latsearch,
				longtbaby: longtsearch
			},
			success: function(response) {
				$('.instapics').html(response);
				that.parent().children('.instapics').toggle(1500);
			},
			error: function() {
				console.log('error');
			}
			});
		})
	
	$('.mapit').on('click', function() {
		var latsearch = encodeURI($(this).parent().children('.hidden').html());
		var longtsearch = encodeURI($(this).parent().children('.hidden').attr('name'));
		var rest_name = $(this).parent().children('.name').html();

		$('html, body').animate({ scrollTop: 0 }, 0);


	if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
			var lat = position.coords.latitude;
			var longt = position.coords.longitude;
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
			var rest = new google.maps.LatLng(latsearch,longtsearch);
			var marker2 = new google.maps.Marker({
				position: rest,
				title: rest_name,
				icon: '/ITP404-MVCpart1/mvc1/public/img/fastfood.png'
			});

			marker2.setMap(map);	

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
			
			var infowindow2 = new google.maps.InfoWindow({
				content: rest_name+"<br /><a href='http://maps.google.com/maps?saddr="+current+"&daddr="+rest+"'>Get Directions</a>"
			});

			google.maps.event.addListener(marker2, 'click', function() {
			infowindow2.open(map, marker2);
			});


	}) 
	
	}
	$('#map').show();
	})
	
	
	$('.localmenus').on('click', function(e) {
	console.log("click");
		e.preventDefault();
		var that = $(this);
		var food = $(this).parent().children(".localtweets").attr('name');
		
		
		 var key = "xxx";
   var cx = "xxx";
      function hndlr(response) {
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];
        // in production code, item.htmlTitle should have the HTML entities escaped.
        that.parent().children('.localmenusdata').html("<br>" + item.htmlTitle);
      }
    }
    var src = "https://www.googleapis.com/customsearch/v1?key=";
   src += key;
   src += "&cx=";
   src += cx;
   src += "&q=";
   src += search;
   src += "&callback=hndlr";
   console.log(src);
   
var s = document.createElement('script');
    s.src = src;
    document.getElementsByTagName("head")[0].appendChild(s);
   
    	
	})
	
})();