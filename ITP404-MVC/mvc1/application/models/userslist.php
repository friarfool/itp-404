<?php

class UsersList {

	public static function all() {
		$results = DB::table('users')->get();
		return $results;
	}
}

?>