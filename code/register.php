	<?php
		include_once('../database/connection.php');

	session_start();
		if(register($_POST['Name'],$_POST['Email'],$_POST['Password'])){
			$_SESSION['success_messages'][] = "Login Successful!";
			include_once('../database/list.php');
			$tasks = getListsByDate($_POST['Email']);
			$items = getItemsByDate($_POST['Email']);
			include('main_page.php');
		}

		function register($name,$email,$password){
	#		try{
			global $dbh;
	    //$hashed = password_hash($password, PASSWORD_DEFAULT);
			if(mailDoesntExists($email)) {
				$stmt = $dbh->prepare('INSERT INTO user (Name,Email,Password) VALUES (?, ?, ?)');
				$stmt->execute(array($name, $email, sha1($password)));
	#
			}
		#catch(PDOException $e){
		#	return false;
		#}
			return true;
		}

		function mailDoesntExists($email){
			global $dbh;
			$stmt = $dbh->prepare('SELECT * from user where (Email=?)');
			$stmt->execute(array($email));
			if(count($stmt->fetchAll())>0) {return false;} else { return true;}
		}


		?>
