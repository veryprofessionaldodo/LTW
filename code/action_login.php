
<?php
  include_once('../database/user.php');
  include_once('../database/list.php');
  include_once('../database/connection.php');
  session_start();

  if (isLoginCorrect($_POST['Email'], $_POST['Password'])) {
    $_SESSION['Email'] = $_POST['Email'];
    $_SESSION['success_messages'][] = "Login Successful!";
    include_once('../database/list.php');

    $tasks = getListsByDate($_POST['Email']);
    $items = getItemsByDate($_POST['Email']);

    include ('main_page.php');

  } else {
    $_SESSION['error_messages'][] = "Login Failed!";
    header("Refresh:0,url=../index.php");
  }

?>
