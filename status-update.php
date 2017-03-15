<?php 
include("auth.php");
include("config.php");
$id=$_GET['id'];
$status=$_GET['status'];
$sql="UPDATE todo_table SET status=$status,modified_date=now() WHERE id=$id";

mysqli_query($con,$sql);
header("location:todo-list.php");
 ?>