<?php include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>New To Do List</title>
</head>
<body>
<h1>New</h1>
<a href="logout.php">Logout</a>
<form action="todo-insert.php" method="post">
	<label for="description">Description</label>
	<input type="text" name="description" id="description">

	<br><br>
	<input type="submit" value="Add">
	<a href="todo-list.php">Back</a>
</form>
</body>
</html>