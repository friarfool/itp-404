<?php

class Twitter {

	public function getTweetsFromJSON($name) {
		$url = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=".$name;
		$jsonString = file_get_contents($url);
		$arrayOfTweets = json_decode($jsonString);
		return $arrayOfTweets;
	}

}

?>