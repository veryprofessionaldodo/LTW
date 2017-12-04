<?php
  include_once('../database/user.php');

  if (isLoginCorrect($_POST['username'], $_POST['password'])) {
    setCurrentUser($_POST['username']);
    include_once('main_page.php');
    $_SESSION['success_messages'][] = "Login Successful!";
  } else {
    $_SESSION['error_messages'][] = "Login Failed!";
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

