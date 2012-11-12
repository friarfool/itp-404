<!doctype html>
<html>
	<head>
		<title>Paresh's Twitter Search App Using The Laravel MVC</title>
	</head>
	<body>
		<div id="container">
			<h1>Search Twitter By Entering A Username</h1>
			<p>@ sign not needed</p>
			<form action="<?php echo URL::to('twitter/results'); ?>" method="get">
				<input type="text" name="search-term">
				<input type="submit" value="Search">
			</form>
		</div>
	</body>
</html>