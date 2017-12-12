<?php

include_once('../database/user.php');
include_once('../database/list.php');
include_once('../database/connection.php');

session_start();

$id = $_POST['id'];
$date = $_POST['date'];
$content = $_POST['content'];

try{

global $dbh;
$stmt = $dbh->prepare('INSERT INTO items (IdList, Content, Data, Completed) values (:id, :content,:data, 0)');
$stmt->bindParam(":id",$id);
$stmt->bindParam(":data",$date);
$stmt->bindParam(":content",$content);
$stmt->execute();
}
catch(PDOException $e){
  echo "error inserting new item";
}

$tasks = getListsByDate($_SESSION['Email']);
$items = getItemsByDate($_SESSION['Email']);

?>
