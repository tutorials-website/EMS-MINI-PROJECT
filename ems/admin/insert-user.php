<?php
session_start();
include "authentication.php";
$host="localhost";
$username="root";
$pass="";
$db="ems";

$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}

// insert query for register page
if(isset($_REQUEST['email']))
{
	$name=$_POST['inputName'];
	$email=$_POST['email'];
	$pass=md5($_POST['password']);
	$depart=$_POST['depart'];
	$role=$_POST['role'];
	
	$query="INSERT INTO `users` (`user_id`,`name`,`email`,`password`,`department`,`role`) VALUES ('','$name','$email','$pass','$depart','$role')";
	
	$res=mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Data inserted successfully!";
		header('Location:register.php');
	}else{
		echo "Data not inserted, please try again!";
	}
	
}



?>