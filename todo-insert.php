<?php 
include("auth.php");
include("config.php");

$description=$_POST['description'];

$sql="INSERT INTO todo_table(description,status,created_date,modified_date)
 VALUES('$description',0,now(),now())";

mysqli_query($con,$sql);
header("location:todo-list.php");
 ?>