<?php
  function isLoginCorrect($username, $password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM user WHERE usr_username = ? AND usr_password = ?');
    $stmt->execute(array($username, sha1($password)));
    return $stmt->fetch() !== false;
  }

  function user_Get($Name){
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM user WHERE Name = ?');
    $stmt->execute(array($Name));
    return $stmt->fetch();
  }


?>
