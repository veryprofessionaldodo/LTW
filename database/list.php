<?php

  function getAllItems() {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM items
                           ORDER BY ID ");
    $stmt->execute();
    return $stmt->fetchAll();
  }

function getListsByDate(){

 global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM list WHERE data<=date() 
                           ORDER BY ID ");
    $stmt->execute();
    return $stmt->fetchAll();


}

function getItemsByDate(){

 global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM list WHERE data<=date() 
                           ORDER BY ID ");
    $stmt->execute();
    return $stmt->fetchAll();

}


?>
