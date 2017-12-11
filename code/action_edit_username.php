<?php
include_once('../database/user.php');
include_once('../database/connection.php');

updateUsername($_SESSION['Email'],$_POST['newName']);

 ?>
