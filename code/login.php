<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ListCheckers Login</title>
    <link href="css/layout_login.css" rel="stylesheet">
</head>
<body>
	<h1 id = "mainTitle">Welcome to ListCheckers!</h1>
	<input id="tab1" type="radio" name="tabs" checked>
  	<label for="tab1">Login</label>

  	<input id="tab2" type="radio" name="tabs">
  	<label for="tab2">Signup</label>

  	<div id="loginTab">
		<form action="code/action_login.php" method="post">
			<input type="email" name="Email" placeholder="Write your E-Mail here..." value="" required="required"><br>
			<input type="password" name="Password" placeholder="... And here your password!" value="" required="required"><br>
		<input type="submit" value="Submit">
		</form>
	</div>

	<div id="signupTab">
		<form action="code/register.php" method="post">
			<input type="text" name="Name" placeholder="What's your name?" value="" required="required"><br>
			<input type="email" name="Email" placeholder="Here goes your E-Mail..." value="" required="required"><br>
			<input type="password" name="Password" placeholder="...and here you can write your password!" value="" required="required"><br>
		<input type="submit" value="Submit">
		</form>
	</div>
	<div id="signupTab"></div>

</body>
</html>
