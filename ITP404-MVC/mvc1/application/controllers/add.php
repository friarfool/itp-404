<?php
class Add_Controller extends Base_Controller {

	public function action_index() {
	return View::make('home.add');
	}

// 
// 	public function action_results() {
// 		$search_term = Input::get('search-term');
// 		$search_term = urlencode($search_term);
// 
// 		$twitter = new Twitter();
// 		$twitter_search = $twitter->getTweetsFromJSON($search_term);
// 
// 
// 		$data = array(
// 			'search_term' => $search_term,
// 			'results' => $twitter_search
// 		);
// 
// 		return View::make('home.results', $data);
// 	}

}
?>