<?php
$name = $_GET['name'];

require 'functions.php';

$tweets = getTweetsFromJSON($name);
echo '<ul id="list-tweets">';
foreach($tweets as $tweet) {
echo '<li>';
echo '<img src="'.$tweet->user->profile_image_url.'" />';
echo $tweet->text;
echo '<div class="date">'.$tweet->created_at.'</div>';
echo '<div style="clear:both;"></div>';
echo '</li>';
}
echo '</ul>';


