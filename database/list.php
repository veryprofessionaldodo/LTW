<?php
  function getAllItems() {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
      FROM items
      ORDER BY Id ");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getListsByDate(){
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
      FROM list WHERE data<=date() 
      ORDER BY Id ");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getItemsByDate(){
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
      FROM list WHERE data<=date() 
      ORDER BY Id ");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function removeItem($id) {
   global $dbh;
    $stmt = $dbh->prepare("DELETE FROM list WHERE Id = $id");
    $stmt->execute();
    return $stmt->fetchAll(); 
  }

?>
