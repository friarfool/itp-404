<!doctype html>
<html>
	<head>
		<title>Food Finder</title>
		<link rel="stylesheet" href="<?php echo URL::to_asset('css/default.css') ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="<?php echo URL::to_asset('js/popbox.js') ?>"></script>
 		<link rel="stylesheet" href="<?php echo URL::to_asset('css/popbox.css') ?>" type="text/css">
 				<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
 				<script type="text/javascript" charset="utf-8" src="<?php echo URL::to_asset('js/lightbox/js/jquery.lightbox-0.5.js') ?>"></script>
 		<link rel="stylesheet" href="<?php echo URL::to_asset('js/lightbox/css/jquery.lightbox-0.5.css') ?>" type="text/css">
	
	</head>
	<body>

		<h1>The <?php echo urldecode($search_term); ?> We Found In <?php echo urldecode($place_term); ?></h1>
		
		 <?php echo render('home.gmap'); ?>
		<div id="results">
			<?php
			//print_r($results);
			$color_one = 'gray';
			$color_two = 'yellow';
			$i = 1;
				foreach($results->businesses as $business) {
				$zip = $business->location->postal_code;
					$class_color = (is_int($i / 2)) ? $color_one : $color_two;
					$biz = htmlspecialchars($business->name);
					//$tweet_text = $tweet->text;
					//$tweet_time = $tweet->created_at;
					//$tweet_time_fixed = strftime('%l:%M %p %d %a %b %e', strtotime($tweet_time));
					//$tweet_url = "https://twitter.com/".$search_term."/status/".$tweet->id_str;
					echo "<div class='$class_color'>";
					if (isset($business->image_url)) { echo "<img border=0 src='".$business->image_url."'><br/>";} 
					echo "<p class='tweet name'>".$business->name."</p>";
					echo "<a href='#' class='mapit'>Map it!</a><br />";
					
				echo "<p class='hidden' name='".$business->location->coordinate->longitude."'>".$business->location->coordinate->latitude."</p>";
										echo "<a class='localpics' href='#'>See recent pics from nearby</a><br />";
					echo "<p class='instapics tweets'></p>";

					echo "<a class='localtweets' name='".htmlspecialchars($business->name)."' href='#'>See recent tweets from nearby</a>";
					echo "<p class='localtweetsdata tweets'></p>";
					@include('home.opentable');
					echo "<div class='popbox'>
							<a class='open' href='#'>Tips!</a>
							<div class='collapse'>
   								 <div class='box'>
   								   <div class='arrow'></div>
    							   <div class='arrow-border'></div>

<iframe src='http://localhost:8888/ITP404-MVCpart1/mvc1/public/foursq/?venue-term=$biz&place-term=$zip'></iframe>      <a href='#' class='close'>close</a>
    </div>
  </div>
</div>";
					
					
					
					//echo "<iframe src='http://localhost:8888/ITP404-MVCpart1/mvc1/public/foursq/?venue-term=$business->name&place-term=$zip' />";
					//echo "<p class='tweet-details'>".$tweet_time_fixed."</p>";
					echo "</div>";
					$i++;
					}
				
			?>
		</div>
		
		<script type='text/javascript'>
   $(document).ready(function(){
     $('.popbox').popbox();
     	$('#gallery a.instanear').lightBox();
     $('#results').on('click', 'a.instanear', function(e) {
$(this).lightBox();
    $(this).trigger('click');
    e.preventDefault();
         });
   });
</script>
<script type="text/javascript">var BASE = "<?php echo URL::base(); ?>";</script>
<?php echo HTML::script('js/ajax.js'); ?>

	</body>
</html>