<?php
include_once('../database/user.php');
include_once('../database/list.php');
include_once('../database/connection.php');

$id = $_POST['id'];

global $dbh;
$stmt = $dbh->prepare('DELETE FROM items WHERE IdList = ?');
$stmt->execute(array($id));
$stmt->fetch();

$stmt2 = $dbh->prepare('DELETE FROM list WHERE Id = ?');
$stmt2->execute(array($id));
 ?>
