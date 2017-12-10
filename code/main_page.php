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
    		<div class="task" id="<?=$task['Id']?>">
		      	<h2><?=$task['Title']?></h2>
            	<p class="date"><?=$task['Data']?></p>
      			<p class="category"><?=$task['Category']?></p>
      			<input id="taskTabButton" type="radio" name="taskTabSelect" onclick="selectFunctionList(<?=$task['Id']?>)"></input>
      			<ol>
	      			<?php 
		      			global $dbh;
		      			$itemId = $task['Id'];
		      			$query = "SELECT * FROM items WHERE IdList=$itemId";
		      			$result = $dbh->query($query);

		      			foreach ($result as $item) { ?>
		    				<ul class="item" id="<?=$item['Id']?>">
						      	<h2><?=$item['Content']?></h2>
		        	    		<p class="itemDate"><?=$item['Data']?></p>
		      					<p class="completed"><?=$item['Completed']?></p>
		      					<input id="itemTabButton" type="radio" name="itemTabSbelect" onclick="selectFunctionItem(<?=$item['Id']?>)"></input>
				    		</ul>
		  			<?php } ?>
	  			</ol>
    		</div>
  		<?php } ?>
	</div>
	<div id="topBar">

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

</body>
</html>
