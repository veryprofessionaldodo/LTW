<?php
  //$db = new PDO('sqlite:users.db');
  //$stmt = $db->prepare('INSERT INTO user (username, email, password) VALUES (?, ?, ?)');
  //$stmt->execute(array($Name, $Email, $Password));
  //echo $_POST["name"];
  //echo $_POST["Email"];
  //echo $_POST["Password"];
	include_once('../database/connection.php');
  register($_POST['Name'],$_POST['Email'],$_POST['Password']);

  function register($name,$email,$password){
    global $dbh;
    $hashed = password_hash($password, PASSWORD_DEFAULT);
  	$stmt = $dbh->prepare('INSERT INTO user (Name,Email,Password) VALUES (?,?,?)');
  	$stmt->execute(array($name, $email, $hashed));
  }


?>
