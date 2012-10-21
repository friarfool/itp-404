<?php require 'functions.php' ?>
<!doctype html>
<html>
	<head>
		<title>Lyrics Results</title>
	</head>
	<body>
		<?php
			$search = $_GET['q'];
			$xml = getLyricsFromXML($search);
			
			if(empty($xml->SearchLyricResult)) {
				echo "Sorry no results. Go back and try again.";
			}
			
			echo '<div>';
			foreach($xml->SearchLyricResult as $song) {
				echo '<h1>' . $song->Song . ' - '. $song->Artist .'</h1>';
				echo '<p><a href="'.$song->SongUrl.'">View Lyrics</a></p>';
			}
			echo '</div>';
			?>

</body>
</html>