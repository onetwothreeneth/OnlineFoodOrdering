<?php

include 'dbconn.php';
session_start();
$email = $_SESSION['email']; 

	$sql = "UPDATE messages set status='1' where cust_email='$email'";
	$result = mysqli_query($conn,$sql);
	
?>