<?php
class Yelp_Controller extends Base_Controller {

	public function action_index() {
	return View::make('home.appsearch');
	}


	public function action_results() {
		$search_term = Input::get('search-term');
		$place_term = Input::get('place-term');
		$input = Input::all();
		
		$rules = array(
    		'search-term'  => 'required',
    		'place-term' => 'required',
		);
		
		$validation = Validator::make($input, $rules);

		if ($validation->fails())
			{
			
			 return View::make('home.appsearch')->with('validation', $validation);
		}
		
		$lat = Input::get('lat');
		$search_term = urlencode($search_term);
		$place_term = urlencode($place_term);
		$yelp = new Yelp();
		$yelp_search = $yelp->getInfoFromYelp($search_term,$place_term);


		$data = array(
			'search_term' => $search_term,
			'place_term' => $place_term,
			'lat' => $lat,
			'results' => $yelp_search
		);

		return View::make('home.app', $data);
	}


}

?>