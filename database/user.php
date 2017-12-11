<?php
include_once('../database/connection.php');
  function isLoginCorrect($email, $password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM user WHERE Email = ? AND Password = ?');
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch() !== false;
  }

function updatePassword($email,$newPassword){
  global $dbh;
  $stmt = $dbh->prepare('UPDATE user SET Password = ? WHERE Email = ?');
  $stmt->execute(array($newPassword,$email));
  return $stmt->fetch() !== false;
}

function updateUsername($email,$newName){
  global $dbh;
  $stmt = $dbh->prepare('UPDATE user SET Name = ? WHERE Email = ?');
  $stmt->execute(array($newName,$email));
  return $stmt->fetch() !== false;
}

?>
