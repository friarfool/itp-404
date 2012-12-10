<?php

class Foursquare {

	public function getInfoFromFour($venue_name,$place_term,$token) {
		$url = "https://api.foursquare.com/v2/venues/search?query=".$venue_name."&near=".$place_term."&limit=1&oauth_token=".$token."&v=20121201";
		$jsonString = @file_get_contents($url);
		$arrayOfPlaces = json_decode($jsonString);
		if(isset($arrayOfPlaces)) {
		
		foreach($arrayOfPlaces->response->venues as $venue) {
					$urlurl = "https://api.foursquare.com/v2/venues/".$venue->id."?oauth_token=".$token."&v=20121201";
					$jsonStringsearch = file_get_contents($urlurl);
					$arrayOfTips = json_decode($jsonStringsearch);
				}
		return $arrayOfTips;
		}
	}
}
?>