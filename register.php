<?php

function register($username,$email,$password){
	include_once('connection.php');

  	global $db;
  	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     	echo "Invalid email format";
     	return false; 
   	}
	$stmt = $db->prepare('INSERT INTO user (Name, Email, Password) VALUES ('$username','$email','$password')');
  	$stmt->execute(array($username, $email, $password));
}


?>
