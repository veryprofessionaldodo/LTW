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
			<button type="button" name="tabToday">- For Today</button>

			<!--<input id="tabWeek" type="radio" name="timeTab">-->
			<button type="button" name="tabWeek">- For Week</button>

			<!--<input id="tabAll" type="radio" name="timeTab">-->
			<button type="button" name="tabAll">- All Time</button>
		</div>
		<div id="projectsTabs">
			<h2>Projects</h2>
			<input id="addNew" type="radio" name="projectTab">
			<label for="addNew">- Add New</label>
		</div>
	</div>


	<div id="topBar">
			<img src="../images/settings.svg" id="settingSvg" onclick="editProfile()"></img>
			<img src="../images/logout.png" id="logoutIcon" onclick="logout()"></img>
	</div>

	<div id="editProfile">
		<div class="editPassword">
			<form action="action_edit_profile.php" method="post">
		   		<label>Old Passowrd :
		   		  <input type = "text" name="oldPassword" placeholder="Current 	password" value="" required="required"><br>
		   		</label>
		   		<label>New Password :
		     			<input type = "text" name="newPassword" placeholder="New password" value="" required="required"><br>
		   		</label>
		   		<input type = "submit" value = "Submit">
			</form>
		</div>

		<div class="editUsername">
			<form action="action_edit_username.php" method="post" enctype="	multipart/form-data">
		   		<label>New Username :
		   			<input type="text" name="newName">
		  		</label>
		   		<input type = "submit" value = "Submit">
			</form>
		</div>

		<a class="close" onclick="clearEditProfilePopup()" href="#">&times;</a>
	</div>
</body>
</html>
