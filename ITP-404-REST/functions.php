<?php
function getLyricsFromXML($search) {
	$search = urlencode($search);
	$getlyricsURL = "http://api.chartlyrics.com/apiv1.asmx/SearchLyricText?lyricText=".$search;
	$xmlString = file_get_contents($getlyricsURL);
	$simpleXML = simplexml_load_string($xmlString);
	return $simpleXML;
}

?>