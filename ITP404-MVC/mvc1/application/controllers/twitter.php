<?php
class Twitter_Controller extends Base_Controller {

	public function action_index() {
	$listusers = UsersList::all();
	//dd($listusers);
	$data = array('names' => $listusers);
	return View::make('home.search', $data);
	}


	public function action_results() {
		$search_term = Input::get('search-term');
		$search_term = urlencode($search_term);

		$twitter = new Twitter();
		$twitter_search = $twitter->getTweetsFromJSON($search_term);


		$data = array(
			'search_term' => $search_term,
			'results' => $twitter_search
		);

		return View::make('home.results', $data);
	}
	
	public function action_addition() {
		
			$users = Users::add();
		
		return View::make('home.success');
	}
	
	
	


}





?>