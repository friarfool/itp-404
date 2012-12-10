<?php
class Instagram_Controller extends Base_Controller {

	public function action_index() {
		$token = "xxx";
		$lat_term = Input::get('latbaby');
		$longt_term = Input::get('longtbaby');
		$lat_term = urlencode($lat_term);
		$longt_term = urlencode($longt_term);
		$insta = new Instagram();
		$insta_search = $insta->getInfoFromGram($lat_term,$longt_term,$token);


		$data = array(
			'results' => $insta_search
		);
		
	return View::make('home.pics',$data);
	}


}

?>