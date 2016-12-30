<?php
session_start();
@$email = $_SESSION['email'];
include "dbconn.php";

	$sql9 = "SELECT * FROM users where email='$email'";
	$result9 = mysqli_query($conn,$sql9);
	while($row9 = mysqli_fetch_array($result9)){
		$name9 = $row9['name'];
			
			$sql8 = "INSERT INTO notifications values('','$name9',CURRENT_TIMESTAMP,'Logout from Conchos online ordering site','0')";
			$result8 = mysqli_query($conn,$sql8); 

				session_destroy();
				unset($email);
				header('location:../index');
	}
				header('location:../index');

?>