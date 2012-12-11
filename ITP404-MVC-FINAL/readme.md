<<<<<<< HEAD
# Paresh's Food Search

This app is live on [Pagoda Box](http://alone-alba.pagodabox.com/).

## Requirements Met

1. Web application that brings together Yelp, Foursquare, Twitter, Instagram and Google Maps.

2. Yelp REST web service to display main information about restaurant.

3. Foursquare REST web service to display tips. (And the Google Maps API to map a selected restaurant and your current location.)

4. AJAX using jquery to display foursquare tips, Twitter posts, instagram pictures and to plot restaurant on map when prompted.

5. JQuery to show/hide different sections. Jquery plugins to display tips and lightbox for pictures.

6. From list of other choices:
	* Geolocation API used on search screen to pre-populate location search field.  
	* Blade templating to display the main results page as well as the Instagram pictures template. 
	* Laravel Validator class to make sure search form is filled out.
	* Instagram and Twitter APIs.

## Other Notes

1. Tried using Google Custom Search API and made it work, but it would hit the (free) daily limit really fast so I had to de-activate it. 

2. Tried using the unofficial OpenTable API as well since there is no official OpenTable API. However, the lack of JSONP support and the lack of restaurants with OpenTable rendered it pretty useless.
