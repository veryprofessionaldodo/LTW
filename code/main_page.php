<!DOCTYPE html>
<html>
<head>
	<title>List Checkers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/main_page.css" rel="stylesheet">
</head>
<body>
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
</body>
</html>
