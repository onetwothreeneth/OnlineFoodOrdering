<?php

$conn = mysqli_connect('localhost','root','');
$dbconn = mysqli_select_db($conn,'conchos_sisig');
echo $id = $_POST['id']; 

	$sql = "UPDATE cart_orders set status='3' where id='$id'";
	$result = mysqli_query($conn,$sql); 
	
?>