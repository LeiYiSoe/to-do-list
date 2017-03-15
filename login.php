<?php 
session_start();
include("config.php");
$username=$_POST['username'];
$password=$_POST['password'];

if($username=="admin"&&$password="123"){
	$_SESSION['auth']=true;
	header("location: todo-list.php");
}
else{
	header("location: index.php");
}
 ?>

