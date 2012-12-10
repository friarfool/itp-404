<!doctype html>
<html>
	<head>
		<title>Latest Tweets About <?php echo $search_term ?></title>
		<link rel="stylesheet" href="<?php echo URL::to_asset('css/default.css') ?>">
	</head>
	<body>
		<div id="results">
			<?php
			
			class Twitterfix {
			
			public function twitterify($ret) {
 				$ret = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t< ]*)#", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $ret);
  				$ret = preg_replace("#(^|[\n ])((www|ftp)\.[^ \"\t\n\r< ]*)#", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $ret);
 				$ret = preg_replace("/@(\w+)/", "<a href=\"http://www.twitter.com/\\1\" target=\"_blank\">@\\1</a>", $ret);
  				$ret = preg_replace("/#(\w+)/", "<a href=\"http://search.twitter.com/search?q=\\1\" target=\"_blank\">#\\1</a>", $ret);
			return $ret;
			}

			}
			
			$color_one = 'dark';
			$color_two = 'light';
			$i = 1;
			if(empty($results->statuses)) {
				echo "<p>Sorry no nearby tweets.</p>";
				}
			else {
				echo "<h3>Tweets In The Area Referring To ".urldecode($search_term)."</h3>";

				foreach($results->statuses as $tweet) {
					$tweeter = new Twitterfix();
					$tweet_text = $tweeter->twitterify($tweet->text);
					$class_color = (is_int($i / 2)) ? $color_one : $color_two;
					$tweet_time = $tweet->created_at;
					$tweet_time_fixed = strftime('%l:%M %p %d %a %b %e', strtotime($tweet_time));
					$tweet_url = "https://twitter.com/".$search_term."/status/".$tweet->id_str;
	
					echo "<div class='$class_color'>
					<img src='".$tweet->user->profile_image_url."' class='left' /><p class='tweettext'>".$tweet_text."</p>";
					echo "<p class='tweet-details'>".$tweet_time_fixed."<span class='link'>&nbsp;<a href='".$tweet_url."'>More details</a></span></p>";
					echo "</div>";
					$i++;
					}
				}		
			?>
		</div>
	</body>
</html>