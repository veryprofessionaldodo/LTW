
<?php
  include_once('../database/user.php');
  include_once('../database/list.php');
  include_once('../database/connection.php');
  session_start();

  if (isLoginCorrect($_POST['Email'], $_POST['Password'])) {
    $_SESSION['Email'] = $_POST['Email'];
    $_SESSION['success_messages'][] = "Login Successful!";
    include_once('database/list.php');


    $tasks = getListsByDate();
    $items = getItemsByDate();
    include ('main_page.php');

  } else {
    $_SESSION['error_messages'][] = "Login Failed!";
    echo $_POST['Email'];
    echo $_POST['Password'];
    //$tasks = getListsByDate();
    //include ('main_page.php');
  }

?>
