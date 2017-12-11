
<?php
  include_once('../database/user.php');
  include_once('../database/list.php');
  include_once('../database/connection.php');

  if (isLoginCorrect($_POST['Email'], $_POST['Password'])) {
    //setCurrentUser($_POST['username']);
    echo($_POST['Email']);
    $_SESSION['Email'] = $_POST['Email'];
    $_SESSION['success_messages'][] = "Login Successful!";
    include_once('database/list.php');

    session_start();
    $tasks = getListsByDate();
    $items = getItemsByDate();
    include ('main_page.php');

  } else {
    $_SESSION['error_messages'][] = "Login Failed!";
    $tasks = getListsByDate();
    include ('main_page.php');
  }

?>
