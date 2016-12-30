<?php 

include "dbconn.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users where email='$email' and pass='$pass'";
$result =mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
	if ($row>0) {   
		session_start();
		$_SESSION['email'] = $email; 

			$sql9 = "SELECT * FROM users where email='$email'";
			$result9 = mysqli_query($conn,$sql9);
			$row9 = mysqli_fetch_array($result9);
				$name9 = $row9['name'];
			
					$sql8 = "INSERT INTO notifications values('','$name9',CURRENT_TIMESTAMP,'Logged In','0')";
					$result8 = mysqli_query($conn,$sql8); 
   			
   						echo "1";

	} else {
		
		echo "0"; 
		
	}

?>