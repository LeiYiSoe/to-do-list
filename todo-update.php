<?php 
include("auth.php");
include("config.php");
$id=$_GET['id'];
$description=$_GET['description'];
$sql="UPDATE todo_table SET description='$description',modified_date=now() WHERE id=$id";

mysqli_query($con,$sql);

header("location:todo-list.php");
 ?>