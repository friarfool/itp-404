@if (empty($results->data)) 
	<p>Sorry no pictures near this place.</p>
	
@else 
	<div id='gallery'>
	<?php
		$color_one = 'purp';
		$color_two = 'blue';
		$i = 1;
	?>
		@foreach ($results->data as $img)
			<?php $class_color = (is_int($i / 2)) ? $color_one : $color_two; ?>
			<div class='photo {{ $class_color }}'>
				<a class='instanear' href='{{ $img->images->standard_resolution->url }}'>
					<img class='left' src='{{ $img->images->thumbnail->url }}' />
				</a>
				@if (isset($img->caption->text))
					<div class='caption tweettext'><span>{{ $img->caption->text }}</span></div>
				@endif
			</div>
			<?php $i++; ?>
		@endforeach
@endif
</div>