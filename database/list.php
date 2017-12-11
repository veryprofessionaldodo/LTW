<?php
  function getAllItems() {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
      FROM items
      ORDER BY Id ");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getListsByDate($email){
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
      FROM list WHERE data<=date() AND Email = ?
      ORDER BY Id ");
    $stmt->execute(array($email));
    return $stmt->fetchAll();
  }

  function getItemsByDate($email){
    global $dbh;
    $stmt = $dbh->prepare("Select Content, items.Data, Completed From items inner join list on items.ItemId=list.Id WHERE Email = ?");
    $stmt->execute(array($email));
    return $stmt->fetchAll();
  }

  function removeItem($id) {
   global $dbh;
    $stmt = $dbh->prepare("DELETE FROM list WHERE Id = $id");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function deleteList($id){
    global $dbh;
    $cenas=$dbh->prepare("SELECT MAX(ItemId) FROM items WHERE IdList=?");
    $cenas->execute(array($id));
    for ($i=1; $i < $cenas->fetch() ; $i++) {
    removeItem($i);
    }
    $stmt = $dbh->prepare('DELETE FROM list WHERE id = ?');
    return $stmt->execute(array($id));
    }



?>
