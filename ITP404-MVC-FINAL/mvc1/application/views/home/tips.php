<?php
	if(isset($results->response->venue->tips->groups[0]->items[0]->text)) {
		$i=0;
		print "<ul>";
		foreach($results->response->venue->tips->groups[0]->items as $item)
			{
				echo "<li class='".$results->response->venue->id."'>";
				print_r($results->response->venue->tips->groups[0]->items[$i]->text);
				echo "</li>";
				$i++;
			}
		print "</ul>";
	}
else { 
	print "<p>Sorry no tips for this place.</p>"; 
	}
?>


