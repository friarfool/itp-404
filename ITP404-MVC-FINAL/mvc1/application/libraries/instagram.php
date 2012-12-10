<?php

class Instagram {

	public function getInfoFromGram($lat_term,$longt_term,$token) {
		$url = "https://api.instagram.com/v1/media/search?lat=".$lat_term."&lng=".$longt_term."&client_id=".$token."&distance=100";
		$jsonString = @file_get_contents($url);
		$arrayOfPics = json_decode($jsonString);
	
		return $arrayOfPics;
}
}
?>