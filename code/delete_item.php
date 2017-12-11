<?php
include_once('../database/user.php');
include_once('../database/list.php');
include_once('../database/connection.php');

$id = $_POST['id'];

global $dbh;
$stmt = $dbh->prepare('DELETE FROM items WHERE ItemId = ?');
$stmt->execute(array($id));

 ?>
