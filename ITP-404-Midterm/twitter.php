<?php

class Twitter {
        public static function getTweets() {
            	$twitterUsername = "taylorswift13";
            	$twitterURL = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=".$twitterUsername."&count=7";
				$jsonString = file_get_contents($twitterURL);
				$arrayOfTweets = json_decode($jsonString);
				return $arrayOfTweets;
        }
    }
    
?>