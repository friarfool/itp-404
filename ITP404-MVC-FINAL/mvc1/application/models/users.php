<?php

class Users {

public static function add() {
		$user = Input::get('user_search');
		$name = Input::get('name_search');
		DB::table('users')->insert(array('username' => $user, 'real_name' => $name));

}
}

?>