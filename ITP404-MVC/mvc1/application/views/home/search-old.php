<!doctype html>
<html>
<head>
	<title>Flickr Search App</title>
</head>
<body>

	<div id="container">
		<h1>Flickr Search Page</h1>
		<form action="<?php echo URL::to('flickr/results') ?>" method="get">
			<input type="text" name="search-term">
			<input type="submit" value="Search">
		</form>
	</div>

</body>
</html>