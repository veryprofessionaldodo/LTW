<?php

function register($username,$email,$password){
	include_once('connection.php');

  	global $dbh;
  	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     	echo "Invalid email format";
     	return false; 
   	}
	$stmt = $dbh->prepare('INSERT INTO user (Name, Email, Password) VALUES ('$username','$email','$password')');
  	$stmt->execute(array($username, $email, $password));
}


?>
