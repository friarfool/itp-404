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
			<h3>Or click on a user below to jump to that user's tweets:</h3>
				<div id="listusers">
				<?php foreach($names as $nameofuser) : ?>
				<?php $u = urlencode($nameofuser->username);
					$link = URL::to('twitter/results?search-term='.$u); ?> 
					<div class="instructor">
						<p><a href="<?php echo $link ?>"><?php echo $nameofuser->real_name . ' (' . $nameofuser->username ?>)</a></h4>
						</div>
				<?php endforeach ?>
				</div>

		</div>
	</body>
</html>