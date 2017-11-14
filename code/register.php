<?php
  $db = new PDO('sqlite:users.db');
  $stmt = $db->prepare('INSERT INTO user (username, email, password) VALUES (?, ?, ?)');
  $stmt->execute(array($username, $email, $password));

?>
