
<?php
  include_once('../database/user.php');
  include_once('../database/list.php');
  include_once('../database/connection.php');

  if (isLoginCorrect($_POST['Email'], $_POST['Password'])) {
    //setCurrentUser($_POST['username']);
    $_SESSION['success_messages'][] = "Login Successful!";
    include_once('database/list.php');

    session_start();  
    $tasks = getListsByDate();
    include ('main_page.php');

  } else {
    $_SESSION['error_messages'][] = "Login Failed!";
    $tasks = getListsByDate();
    include ('main_page.php');
  }

?>
