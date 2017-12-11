<!DOCTYPE html>
<html>
<head>
	<title>List Checkers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="editPassWord">
  <form action="action_edit_profile.php" method="post">
    <label>Old Passowrd :
      <input type = "text" name="oldPassword" placeholder="Current password" value="" required="required"><br>
    </label>
    <label>New Password :
      <input type = "text" name="newPassword" placeholder="New password" value="" required="required"><br>
    </label>
      <input type = "submit" value = "Submit">
  </form>
</div>

<div class="editUsername">
  <form action="action_edit_username.php" method="post" enctype="multipart/form-data">
    <label>New Username :
      <input type="text" name="newName">
    </label>
    <input type = "submit" value = "Submit">
  </form>
</div>



</body>
</html>
