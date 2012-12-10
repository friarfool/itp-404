<?php
	if(empty($results->data)) {	
		print "<p>Sorry no pictures near this place.</p>"; 
	}
	
	else {
		$i=0;
		print "<div id='gallery'>";
			foreach($results->data as $img)
{
echo "<div class='photo'><a class='instanear' href='".$img->images->standard_resolution->url."'><img src='".$img->images->thumbnail->url."' /></a>";
echo "<div class='caption'><span>".$img->caption->text."</span></div></div>";
$i++;
}
print "</div>"; }

?>

