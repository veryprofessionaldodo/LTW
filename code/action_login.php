<?php
  include_once('../database/connection.php');
  include_once('../database/user.php');


  if (isLoginCorrect($_POST['Email'], $_POST['Password'])) {
    //setCurrentUser(getUsername($_POST['email']));
    include_once('main_page.php');
    $_SESSION['success_messages'][] = "Login Successful!";
  } else {
    $_SESSION['error_messages'][] = "Login Failed!";
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
