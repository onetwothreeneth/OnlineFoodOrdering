<?php

include 'dbconn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$contact = $_POST['contact'];

	$sql = "INSERT INTO contact values('',CURRENT_TIMESTAMP,'$name','$contact','$email','$message','')";
	$result = mysqli_query($conn,$sql);
	echo "<script>alert('Message Sent !');</script>"; 
	header("Refresh:0; url=../contact.php")

?>