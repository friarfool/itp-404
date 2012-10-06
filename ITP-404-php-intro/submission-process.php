<?php
	
	$submit = $_POST['submit'];
	$name = $_POST['username'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	
	
	function redirect() {
		header('Location: form.php'); 
		}

	if(!isset($submit)) {
		redirect();
		}
?>
<html>
<head>
	<title>Submission Results</title>
</head>
<body>
<?php
require('functions.php');
?>
</body>
</html>