<?php

require('twitter.php');

$timeline = new Twitter;
$tweets = $timeline->getTweets();

echo '<ul id="list-tweets">';
foreach($tweets as $tweet) {
echo '<li>';
echo $tweet->text;
echo '<div class="date">'.$tweet->created_at.'</div>';
echo '<div style="clear:both;"></div>';
echo '</li>';
}
echo '</ul>';
?>