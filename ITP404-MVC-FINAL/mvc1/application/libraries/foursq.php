<?php

class Foursquare {

	public function getInfoFromFour($venue_name,$place_term) {
		$url = "https://api.foursquare.com/v2/venues/search?query=".$venue_name."&near=."$place_term."&limit=1&oauth_token=S1AIIBHGLA0IROAD1H2OVE3OU214ENYN3J1URXEYEH1PVNIZ&v=20121201";
		$jsonString = file_get_contents($url);
		$arrayOfPlaces = json_decode($jsonString);
		
		
		foreach($arrayOfPlaces->response->venue as $venues) {
					$urlurl = "https://api.foursquare.com/v2/venues/".$venues->id."?oauth_token=S1AIIBHGLA0IROAD1H2OVE3OU214ENYN3J1URXEYEH1PVNIZ&v=20121201";
					$jsonStringsearch = file_get_contents($urlurl);
					$arrayOfTips = json_decode($jsonStringsearch);
		
					}
		return $arrayOfTips;
	}

}

?>