<?php 
include("config.php");

$finished="SELECT * FROM todo_table WHERE status=1";
$unfinished="SELECT * FROM todo_table WHERE status=0";

$finished_result=mysqli_query($con,$finished);
$unfinished_result=mysqli_query($con,$unfinished);
?>

<?php include("auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>todo list</title>
</head>
<body>
	<h1>To Do List</h1>
	<a href="logout.php">Logout</a>
	<ul>
		<li>
			<img src="" alt="">
			<?php while($row=mysqli_fetch_assoc($unfinished_result)) :?>
				[<a href="status-update.php?id=<?php echo $row['id']?>&status=1">done</a>]
				<?php echo $row['description'] ?>
				[<a href="todo-edit.php?id=<?php echo $row['id'] ?>">edit</a>]
				[<a href="todo-delete.php?id=<?php echo $row['id'] ?>">del</a>]
				<br>
			<?php endwhile; ?>
		</li>
	</ul>

	<ul>
		<li>
			<?php while($row=mysqli_fetch_assoc($finished_result)) :?>
				[<a href="status-update.php?id=<?php echo $row['id'] ?>&status=0">undone</a>]
				<?php echo $row['description'] ?>
				
				<br>
			<?php endwhile; ?>
		</li>
	</ul>
	<a href="todo-new.php">New</a>
</body>
</html>