<?php
include_once('../database/user.php');
include_once('../database/connection.php');

if(isLoginCorrect($_SESSION['Email'],$_POST['oldPassword'])){
  updatePassword($_SESSION['Email'],$_POST['newPassword']);
}

 ?>
