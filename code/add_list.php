<?php

include_once('../database/user.php');
include_once('../database/list.php');
include_once('../database/connection.php');

session_start();

$title = $_POST['title'];
$date = $_POST['date'];
$category = $_POST['category'];

try{

global $dbh;
$stmt = $dbh->prepare('INSERT INTO list (Title, Data, Category, Email) values (:title, :data, :category, :email)');
$stmt->bindParam(":title",$title);
$stmt->bindParam(":data",$date);
$stmt->bindParam(":category",$category);
$stmt->bindParam(":email",$_SESSION['Email']);
$stmt->execute();
}
catch(PDOException $e){
  echo "error inserting new list";
}

$tasks = getListsByDate($_SESSION['Email']);
$items = getItemsByDate($_SESSION['Email']);

 ?>
