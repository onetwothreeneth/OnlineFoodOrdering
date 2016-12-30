<?php

include 'dbconn.php';
session_start();
$email = $_SESSION['email'];
$total = $_POST['total'];
$length = 10; 
$order_id = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 

	$sql = "UPDATE cart set status='1', order_id='$order_id' where cust_email='$email' and status='0'";
	$result = mysqli_query($conn,$sql);
  
			$sql2 = "INSERT INTO cart_orders values('','$order_id','$email',CURRENT_TIMESTAMP,'$total','1')";
			$result2 = mysqli_query($conn,$sql2);

			$sql9 = "SELECT * FROM users where email='$email'";
			$result9 = mysqli_query($conn,$sql9);
			$row9 = mysqli_fetch_array($result9);
				$name9 = $row9['name'];
			
					$sql8 = "INSERT INTO notifications values('','$name9',CURRENT_TIMESTAMP,'Checkout orders','0')";
					$result8 = mysqli_query($conn,$sql8); 


?>