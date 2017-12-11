<!DOCTYPE html>
<html>
<head>
	<title>List Checkers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/main_page.css" rel="stylesheet">
	<script src="scripts.js" async></script>
</head>
<body>
	<div id="mainArea">
  		<?php foreach ($tasks as $task) { ?>
    		<div class="task" id="list<?=$task['Id']?>">
		      	<h2><?=$task['Title']?></h2>
            	<p class="date"><?=$task['Data']?></p>
      			<p class="category"><?=$task['Category']?></p>

				<div class="addNewItem">
					<img src="../images/addNewItem.svg" id="addNewItemImage" onclick="addNewTask()"></img>
					<div id="popupItem">
						<input type="date" id="dataNewItem">
						<input type="text" id="contentNewItem">
						<button onclick="addItemToDatabase(<?=$task['Id']?>, dataNewItem.value, contentNewItem.value)"></button>
						<a class="close" onclick="clearPopupItem()" href="#">&times;</a>

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
	<div id="topBar">

	</div>


	<div class="addNew">
		<img src="../images/addNewButton.svg" id="addNewButton" onclick="addNewTask()"></img>
		<div id="popup">
			<input type="text" id="titleNewList">
			<input type="date" id="dataNewList">
			<input type="text" id="categoryNewList">
			<button onclick="addListToDatabase(titleNewList.value, dataNewList.value, categoryNewList.value)"></button>
			<a class="close" onclick="clearPopup()" href="#">&times;</a>

		</div>
	</div>

	<div id="sidebar">
		<h1 id = "sidebarTitle">List Checkers</h1>

		<div id="mainTasksTabs">
			<h2>Main Tasks</h2>
			<input id="tabToday" type="radio" name="timeTab" checked>
			<label for="tabToday">- For Today</label>

			<input id="tabWeek" type="radio" name="timeTab">
			<label for="tabWeek">- For Week</label>

			<input id="tabAll" type="radio" name="timeTab">
			<label for="tabAll">- All Time</label>
		</div>
		<div id="projectsTabs">
			<h2>Projects</h2>
			<input id="addNew" type="radio" name="projectTab">
			<label for="addNew">- Add New</label>
		</div>
	</div>

	<div class="addNew">
		<img src="../images/addNewButton.svg" id="addNewButton" onclick="addNewTask()"></img>
		<div id="popup">
			<input type="text" id="title">
			<input type="date" id="data">
			<input type="text" id="category">
		</div>
	</div>

	<div class="editProfile">
		<form action="editProfile.php">
			<input type="submit" value="Edit Profile" />
		</form>
	</div>

</body>
</html>
