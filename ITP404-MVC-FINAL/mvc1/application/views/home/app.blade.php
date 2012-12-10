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
			?>
				@foreach ($results->businesses as $business) 
	
	
				<?php
				if(isset($business->location->postal_code)) {
					$zip = $business->location->postal_code;
					}
					else {
					$zip = $place_term;
					
				}
					$class_color = (is_int($i / 2)) ? $color_one : $color_two;
					$biz = htmlspecialchars($business->name);
					$id = $business->id;
					?>
					<div class="{{ $class_color }}">
				
				
				
				
					@if (isset($business->image_url))
			
					<img border=0 src="{{ $business->image_url }}"><br/>
					 @endif
					
					<p class='tweet name'>{{ $business->name }}</p>
					<img src="{{ $business->rating_img_url_large }}" /><br />
					<p>{{ $business->snippet_text }} Continue reading first of <a href="{{ $business->url }}">{{ $business->review_count}} reviews</a>.</p>
						@if (isset($business->display_phone))
			
							<p class="small">{{ $business->display_phone }}.</p>
						 @endif
					
				
					
					<a href='#' class='mapit'>Map it!</a><br />
							<p id="{{ $id }}"></p>
							<p class='hidden' name='{{ $business->location->coordinate->longitude }}'>{{ $business->location->coordinate->latitude }}</p>
									@include('home.google')
									
									<!-- 
						<a class='localmenus' href='#'>See matching menu</a><br />
														<p class='localmenusdata'></p>
						 -->

										<a class='localpics' href='#'>See recent nearby Instagrams</a><br />
					<p class='instapics tweets'></p>
									<a class='localtweets' name='{{ $biz }}' href='#'>See recent nearby tweets</a>
					<p class='localtweetsdata tweets'></p>
						<div class='popbox'>
							<a class='open' href='#'>Tips!</a>
							<div class='collapse'>
   								 <div class='box'>
   								   <div class='arrow'></div>
    							   <div class='arrow-border'></div>
    							   <iframe src='http://localhost:8888/ITP404-MVCpart1/mvc1/public/foursq/?venue-term={{ $biz }}&place-term={{ $zip }}'></iframe>      <a href='#' class='close'>close</a>
  						  </div>
 				 </div>
				</div>

				<?php	$i++;	?>
	
					</div>
				@endforeach		
	
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