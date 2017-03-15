<?php 
include("auth.php");
include("config.php");
$id=$_GET['id'];
$sql="DELETE FROM todo_table WHERE id=$id";
mysqli_query($con,$sql);
header("location:todo-list.php");
 ?>