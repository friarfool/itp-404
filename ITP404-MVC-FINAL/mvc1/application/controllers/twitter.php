<?php
class Twitter_Controller extends Base_Controller {

	public function action_index() {

		$search_term = Input::get('search-term');
		$search_term = urlencode($search_term);
		$lat_term = Input::get('lat-term');
		$lat_term = urlencode($lat_term);
		$longt_term = Input::get('longt-term');
		$longt_term = urlencode($longt_term);
		$twitter = new Twitter();
		$twitter_search = $twitter->getTweetsFromJSON($search_term,$lat_term,$longt_term);

		$data = array(
			'search_term' => $search_term,
			'results' => $twitter_search
		);
		return View::make('home.tweets', $data);
	}
}
?>