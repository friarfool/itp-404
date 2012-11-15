<!doctype html>
<html>
	<head>
		<title>Paresh's Twitter Search App Using The Laravel MVC</title>
	</head>
	<body>
		<div id="container">
			<h1>Add a Twitter user to the database</h1>
			<p>@ sign not needed</p>
			<form action="<?php echo URL::to('twitter/addition'); ?>" method="get">
				<label for="user_search">What is the Twitter username:</label> <input type="text" name="user_search">
				<label for="real_search">What is the user's real name:</label> <input type="text" name="name_search">
				<input type="submit" value="Add">
			</form>
		</div>
	</body>
</html>