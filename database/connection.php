<?php
  $dbh = new PDO('sqlite:database/database.db');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $dbPRAGMA = $dbh->prepare('PRAGMA foreign_keys=ON;');
  $dbPRAGMA->execute();
?>
