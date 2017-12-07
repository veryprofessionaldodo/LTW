<?php
  function isLoginCorrect($email, $password) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM user WHERE Email = ? AND Password = ?');
    $stmt->execute(array($email, sha1($password)));
    echo 'ola';
    return $stmt->fetch() !== false;
  }
?>
