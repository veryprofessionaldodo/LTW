<?php


function getAllLists($Name) {
  global $dbh;

  $stmt = $dbh->prepare('SELECT * FROM list WHERE (Name = ?)');
  $stmt->execute(array($Name));

  return $stmt->fetchAll();
}

function getListsById($Id) {
  global $dbh;

  $stmt = $dbh->prepare('SELECT * FROM list WHERE (Id = ?)');
  $stmt->execute(array($Id));

  return $stmt->fetch();
}

function getAllItems($Id) {
  global $dbh;

  $stmt = $dbh->prepare('SELECT * FROM items WHERE (Id = ?) ORDER BY Data');
  $stmt->execute(array($Id));

  return $stmt->fetchAll();
}

function getListsByDate($data){
  global $dbh;

  $stmt = $dbh->prepare("SELECT *FROM list WHERE data<=SYSDATETIME () ORDER BY Id ");
  $stmt->execute();

  return $stmt->fetchAll();
}

function getItemsByDate(){
  global $dbh;

  $stmt = $dbh->prepare("SELECT * FROM items WHERE data<=SYSDATETIME () ORDER BY Id ");
  $stmt->execute();

  return $stmt->fetchAll();

}

?>
