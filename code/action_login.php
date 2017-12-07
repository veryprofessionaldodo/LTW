
<?php
  include_once('../database/user.php');
  include_once('../database/connection.php');

  if (isLoginCorrect($_POST['Email'], $_POST['Password'])) {
    //setCurrentUser($_POST['username']);
    $_SESSION['success_messages'][] = "Login Successful!";
    include_once('main_page.php');
  } else {
    $_SESSION['error_messages'][] = "Login Failed!";
    include_once('main_page.php');
  }

?>
