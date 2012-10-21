<?php

function getTweetsFromXML() {
$url = "http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=slicknet";
$xmlString = file_get_contents($url);
$simpleXML = simplexml_load_string($xmlString);
return $simpleXML;
}

function getTweetsFromJSON($name) {
$url = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=".$name;
$jsonString = file_get_contents($url);
$arrayOfTweets = json_decode($jsonString);
return $arrayOfTweets;
}


