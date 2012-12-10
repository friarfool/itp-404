<?php

class Opentable_Controller extends Base_Controller {

	public function action_index() {
	$biz = Input::get('biz');
		$zip = Input::get('zip');
		
$opens = new Opentable($biz,$zip);
$open_search = $opens->getOpensFromJSON($biz,$zip);


		$data = array(
			'opens' => $open_search
		);
		
	return View::make('home.opentablev',$data);
	}


}

?>

