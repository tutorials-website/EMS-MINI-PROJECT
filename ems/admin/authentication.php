<?php
$role= $_SESSION['role'];
if($role=='employee'){
	   	header('Location:../employee/dashboard.php');

   }
?>