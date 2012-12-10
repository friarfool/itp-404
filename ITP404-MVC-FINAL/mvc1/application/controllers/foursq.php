<?php
class Foursq_Controller extends Base_Controller {

	public function action_index() {
		$token = "xxx";
		$place_term = Input::get('place-term');
		$venue_name = Input::get('venue-term');
		$venue_name = urlencode($venue_name);
		$place_term = urlencode($place_term);
		$foursq = new Foursquare();
		$foursq_search = $foursq->getInfoFromFour($venue_name,$place_term,$token);


		$data = array(
			'venue_name' => $venue_name,
			'place_term' => $place_term,
			'results' => $foursq_search
		);
		
	return View::make('home.tips',$data);
	}


}

?>