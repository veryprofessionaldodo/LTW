<!DOCTYPE html>
<html>
<head>
	<title>List Checkers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/main_page.css" rel="stylesheet">
	<script src="scripts.js" defer></script>
</head>
<body>
	<div id="mainArea">
  		<?php foreach ($tasks as $task) { ?>
    		<div class="task" id="list<?=$task['Id']?>">
		      	<h2><?=$task['Title']?></h2>
            	<p class="date"><?=$task['Data']?></p>
      			<p class="category"><?=$task['Category']?></p>

				<div class="addNewItem">
					<img src="../images/addNewItem.svg" id="addNewItemImage" onclick="addNewItem()"></img>
					<div id="popupItem">
						<label for="dataNewItem"> Date </label>
						<input type="date" id="dataNewItem">
						<label for="contentNewItem"> Title </label>
						<input type="text" id="contentNewItem">
						<label for="submitItem"> Submit </label>
						<button id="submitItem" onclick="addItemToDatabase(<?=$task['Id']?>)"></button>
						<img src="../images/close.png" id="closeNewItemImage"  onclick="clearPopupItem()"></img>
					</div>
				</div>
				<input id="taskTabButton" type="radio" name="taskTabSelect" onclick="selectFunctionList(<?=$task['Id']?>)"></input>
      			<ol>
	      			<?php
		      			global $dbh;
		      			$currentTask = $task['Id'];
		      			$query = "SELECT * FROM items WHERE IdList=$currentTask";
		      			$result = $dbh->query($query);

		      			foreach ($result as $item) { ?>
		      			<script type="text/javascript">
		      			</script>
		    				<ul class="item" id="item<?=$item['ItemId']?>">
						      	<h2><?=$item['Content']?></h2>
		        	    		<p class="itemDate"><?=$item['Data']?></p>
		      					<p class="completed"><?=$item['Completed']?></p>
		      					<input id="itemTabButton" type="radio" name="itemTabSbelect" onclick="selectFunctionItem(<?=$item['ItemId']?>)"></input>
				    		</ul>
		  			<?php } ?>
	  			</ol>
    		</div>
  		<?php } ?>
	</div>



	<div class="addNew">
		<img src="../images/addNewButton.svg" id="addNewButton" onclick="addNewTask()"></img>
		<div id="popup">
			<label for="titleNewList"> Title </label>
			<input type="text" id="titleNewList">
			<label for="dataNewList"> Date </label>
			<input type="date" id="dataNewList">
			<label for="categoryNewList"> Category </label>
			<input type="text" id="categoryNewList">
			<label for="submitList"> Submit </label>
			<button id="submitList" onclick="addListToDatabase(titleNewList.value, dataNewList.value, categoryNewList.value)"></button>
			<img src="../images/close.png" id="closeNewListImage" onclick="clearPopup()"></img>
		</div>
	</div>

	<div id="sidebar">
		<h1 id = "sidebarTitle">List Checkers</h1>
		<div id="mainTasksTabs">
			<h2>Main Tasks</h2>
			<!--<input id="tabToday" type="radio" name="timeTab" checked>-->
			<label for="buttonSideBar1">- For Today</label>
			<button type="button" name="tabToday" id="buttonSideBar1">- For Today</button>

			<!--<input id="tabWeek" type="radio" name="timeTab">-->
			<label for="buttonSideBar2">- For Week</label>
			<button type="button" name="tabWeek" id="buttonSideBar2">- For Week</button>

			<!--<input id="tabAll" type="radio" name="timeTab">-->
			<label for="buttonSideBar2">- All Time</label>
			<button type="button" name="tabAll" id="buttonSideBar3"></button>
		</div>
		<div id="projectsTabs">
			<h2>Projects</h2>
			<label for="addNew">- Add New</label>
			<button id="addNew" type="radio" name="projectTab">
		</div>
	</div>


	<div id="topBar">
			<img src="../images/settings.svg" id="settingSvg" onclick="editProfile()"></img>
			<img src="../images/logout.png" id="logoutIcon" onclick="logout()"></img>
	</div>


		<div id="editProfile">
			<div class="editPassword">
				<form action="action_edit_profile.php" method="post">
			   		<label for="oldPasswordId">Old Password</label>
			   		  <input type = "text" name="oldPassword" id="oldPasswordId" value="" required="required">
			   		<label for="newPasswordId">New Password</label>
			     	<input type = "text" name="newPassword" id="newPasswordId" value="" required="required">
			   		<label for="editSubmitId">New Password</label>
			   		<input type = "submit" value = "Submit">
				</form>
			</div>

			<div class="editUsername">
				<form action="action_edit_username.php" method="post" enctype="	multipart/form-data">
					<label for="oldPasswordId">New Username</label>
			   		<input type="text" name="newName" id="newNameId">
			   		<input type = "submit" value = "Submit">
				</form>
			</div>

			<img src="../images/close.png" id="closeEditImage" onclick="clearEditProfilePopup()"></img>
		</div>
</body>
</html>
