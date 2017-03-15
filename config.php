<?php 
$dbhost="localhost";
$dbuser="root";
$dbpassword="root";
$dbname="todo_db";

$con=mysqli_connect($dbhost,$dbuser,$dbpassword);

mysqli_select_db($con,$dbname);
?>