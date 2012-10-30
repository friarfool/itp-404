var script = document.createElement('script');
script.src = "http://graph.facebook.com/fql?q=SELECT%20page_id,%20name,%20username,%20about,%20website,%20talking_about_count,%20founded,%20fan_count,%20pic_cover,%20pic_square,%20page_url%20FROM%20page%20WHERE%20username%20=%20%27neontommy%27%20OR%20username%20=%20%27HuffPostLA%27%20OR%20username%20=%20%27DailyTrojan%27%20OR%20username=%27AnnenbergTVNews%27%20ORDER%20BY%20fan_count%20DESC&callback=myFunction";
//script.src = "https://graph.facebook.com/cocacola?callback=myFunction";
document.getElementsByTagName('head')[0].appendChild(script);

function myFunction(data) {
	//console.log(data);
	var templateString = $('#fb-page-template').html();
	var template = Handlebars.compile(templateString);
	var jsonHTML = '';
	for (i=0; i<data.data.length; i=i+1) {
		jsonHTML = jsonHTML + template(data.data[i]);
}

$('#fb-page').html(jsonHTML);
	//console.log(jsonHTML);
	$('.add').hide();
}

(function() {
	$('#fb-page').on('click', 'h2', function() {
		var $this = $(this);
		$this.hide('100');
		$this.next().show('200');
	});
})();
