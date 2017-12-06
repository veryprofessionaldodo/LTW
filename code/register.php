<?php
  //$db = new PDO('sqlite:users.db');
  //$stmt = $db->prepare('INSERT INTO user (username, email, password) VALUES (?, ?, ?)');
  //$stmt->execute(array($Name, $Email, $Password));
  //echo $_POST["name"];
  //echo $_POST["Email"];
  //echo $_POST["Password"];
function register($Name,$Email,$Password){
	include_once('connection.php');

  	global $db;
	$stmt = $db->prepare('INSERT INTO user VALUES ($Name,$Email,$Password)');
  	$stmt->execute(array(Name, Email, Password));
  	echo $_POST[Name];
  echo $_POST[Email];
  echo $_POST[Password];
}


?>
