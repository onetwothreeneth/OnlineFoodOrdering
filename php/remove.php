<?php

include 'dbconn.php';
session_start();
$email = $_SESSION['email'];
$id = $_POST['id'];

	$sql = "SELECT * FROM cart where cust_email='$email' and status='0' and id='$id'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);

 		$qty = $row['qty'];
 		if ($qty>1) { 

 			$nqty = $qty - 1;

 			$sql2 = "UPDATE cart set qty='$nqty' where id='$id' and cust_email='$email' and status='0'";
 			$result2 = mysqli_query($conn,$sql2); 

 		} else {

 			$sql3 = "DELETE FROM cart where id='$id' and cust_email='$email' and status='0'";
 			$result3 = mysqli_query($conn,$sql3); 

 		}
?>