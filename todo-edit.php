<?php 
include("auth.php");
include("config.php"); 
$id=$_GET['id'];

$result=mysqli_query($con,"SELECT * FROM todo_table WHERE id=$id");

$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>New To Do List</title>
</head>
<body>
<h1>New</h1>
<a href="logout.php">Logout</a>
<form action="todo-update.php" method="post">
	<input type="hidden" id="id" name="id" value="<?php echo $id ?>">
	<label for="description">Description</label>
	<input type="text" name="description" id="description" value="<?php echo $row['description'] ?>">

	<br><br>
	<input type="submit" value="Add">
	<a href="todo-list.php">Back</a>
</form>
</body>
</html>