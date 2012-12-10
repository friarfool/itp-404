<!doctype html>
<html>
	<head>
		<title>Latest Tweets From <?php echo $search_term ?></title>
		<link rel="stylesheet" href="<?php echo URL::to_asset('css/default.css') ?>">
	</head>
	<body>

		<h1>Tweets From <?php echo $search_term ?></h1>
		<div id="results">
			<?php
			$color_one = 'gray';
			$color_two = 'yellow';
			$i = 1;
			//if i wanted to display user's profile info just once, what would i use instead of foreach loop?
				foreach($results as $tweet) {
					$class_color = (is_int($i / 2)) ? $color_one : $color_two;
					$tweet_text = $tweet->text;
					$tweet_time = $tweet->created_at;
					$tweet_time_fixed = strftime('%l:%M %p %d %a %b %e', strtotime($tweet_time));
					$tweet_url = "https://twitter.com/".$search_term."/status/".$tweet->id_str;
					echo "<div class='$class_color'><p class='tweet'>".$tweet_text."</p>";
					echo "<p class='tweet-details'>".$tweet_time_fixed."</p>";
					echo "<p class='link'><a href='".$tweet_url."'>More details</a></p></div>";
					$i++;
					}
				
			?>
		</div>
	</body>
</html>