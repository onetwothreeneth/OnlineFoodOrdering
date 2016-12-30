<?php 

include "dbconn.php";
 
$name = preg_replace('/[^a-zA-Z0-9\']/','',$_POST['name']);
$email = $_POST['email']; 
$pass = $_POST['pass']; 
$pass2 = $_POST['pass2']; 
$address = $_POST['address']; 
$contact = $_POST['contact']; 
 
if ($pass==$pass2) {

		$sql = "INSERT INTO users values('','$name','$email','$contact','$address','$pass')";
		$result = mysqli_query($conn,$sql); 
		if ($result) {
			echo "0";
		} else {
			echo "error";
		}  

} else {
	echo "pass";
}

?>