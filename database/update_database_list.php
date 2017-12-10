<?php
	include_once('connection.php');
	//$name = $_GET['id'];

	echo "FODASSE"

	global $dbh;
    $stmt = $dbh->prepare("DELETE FROM list WHERE Id = 1");
    $stmt->execute();
    return $stmt->fetchAll(); 
 ?>