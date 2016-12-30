 <?php

include 'dbconn.php';
session_start();
$email = $_SESSION['email']; 
$order_id = $_POST['id'];
	
	$sql = "UPDATE cart_orders set status='4' where cust_email='$email' and order_id='$order_id'";
	$result = mysqli_query($conn,$sql);

		$sql2 = "UPDATE cart set status='4' where cust_email='$email' and order_id='$order_id'";
		$result2 = mysqli_query($conn,$sql2);			

			$sql9 = "SELECT * FROM users where email='$email'";
			$result9 = mysqli_query($conn,$sql9);
			$row9 = mysqli_fetch_array($result9);
				$name9 = $row9['name'];
			
					$sql8 = "INSERT INTO notifications values('','$name9',CURRENT_TIMESTAMP,'Canceled Order','0')";
					$result8 = mysqli_query($conn,$sql8); 

?>