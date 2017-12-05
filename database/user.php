<?php
  function isLoginCorrect($Name, $Password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM user WHERE Name = ? AND Password = ?');
    $stmt->execute(array($Name, sha1($Password)));
    return $stmt->fetch() !== false;
  }

  function user_Get($Name){
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM user WHERE Name = ?');
    $stmt->execute(array($Name));
    return $stmt->fetch();
  }


?>
