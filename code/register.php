<?php
	include_once('../database/connection.php');

session_start();

	If(register($_POST['Name'],$_POST['Email'],$_POST['Password'])){
		$_SESSION['success_messages'][] = "Login Successful!";
		include_once('../database/list.php');
		$tasks = getListsByDate();
		$items = getItemsByDate();
		include ('main_page.php');
	}

  function register($name,$email,$password){
		try{
    global $dbh;
    //$hashed = password_hash($password, PASSWORD_DEFAULT);
  	$stmt = $dbh->prepare('INSERT INTO user (Name,Email,Password) VALUES (:name,:email,:password)');
		$stmt->bindParam(":name",$name);
		$stmt->bindParam(":email",$email);
		$stmt->bindParam(":password",sha1($password));
  	$stmt->execute();
	}
	catch(PDOException $e){
		return false;
	}
		return true;
  }


?>
