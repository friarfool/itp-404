<?php

function secondvalidate($email) {
	$domains = array('yahoo.com', 'gmail.com', 'usc.edu', 'hotmail.com', 'aol.com');
	$num = 0;
	
	foreach ($domains as $domain) {
 		if (strpos($email, $domain)) {	
 			echo "<p>Thank you for your submission.</p>";
 			break;
  			}
	    else { 
			$num++;
			if ($num == 5) {
				echo "<p>Please <a href='form.php'>go back</a> and try again using a valid email provider.</p>"; 
				}
			}
 		}
}

function validate($email) {
	 if(strpos($email,"@")) {
		 secondvalidate($email);
 		}
 else {
 		echo "Please enter a valid email address."; 
 		} 
}

if (strlen($message) > 0 && strlen($email) > 0 && strlen($name) > 0) {
	validate($email);
	} 	
	else {
	echo "<p>Please <a href='form.php'>go back</a> and fill out all the fields.</p>"; 
	}

?>