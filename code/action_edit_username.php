<?php
include_once('../database/user.php');
include_once('../database/connection.php');
session_start();
updateUsername($_SESSION['Email'],$_POST['newName']);
 ?>
