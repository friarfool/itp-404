<?php

class Twitter {

	public function getTweetsFromJSON($name,$lat,$longt) {
		require_once ('OAuth.php');

		$unsigned_url = "https://api.twitter.com/1.1/search/tweets.json?q=".$name."&geocode=".$lat.",".$longt.",10mi";


		$consumer_key = "xxx";
		$consumer_secret = "xxx";
		$token = "xxx";
		$token_secret = "xxx";

		$token = new OAuthToken($token, $token_secret);
		$consumer = new OAuthConsumer($consumer_key, $consumer_secret);
		$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
		$oauthrequest = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $unsigned_url);
		$oauthrequest->sign_request($signature_method, $consumer, $token);
		$signed_url = $oauthrequest->to_url();

		$ch = curl_init($signed_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data = curl_exec($ch); // Yelp response
		curl_close($ch);
		$response = json_decode($data);

		return $response;
		}
	}
?>