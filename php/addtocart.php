<?php
include "dbconn.php";
session_start();

$email = $_SESSION['email'];
$qty = $_POST['qty'];
$prodid = $_POST['prodid'];
	
	
	$sql2 = "SELECT * FROM cart where prod_id='$prodid' and cust_email='$email' and status='0'";
	$result2 = mysqli_query($conn,$sql2);
	$row2 = mysqli_num_rows($result2);
	if ($row2>0) {

		while($rows2 = mysqli_fetch_array($result2)){
			$id2 = $rows2['id'];
			$cust_email2 = $rows2['cust_email'];
			$prod_id2 = $rows2['prod_id'];
			$qty2 = $rows2['qty'];
			$status2 = $rows2['status'];   
			$qtyf = $qty+$qty2;

				$sql3 = "UPDATE cart set qty='$qtyf' where id='$id2' ";
				$result3 = mysqli_query($conn,$sql3);
				if ($result3) {
					echo "1";
				} else {
					echo "0";
				} 
		}

	} else {

		$sql = "INSERT INTO cart values('','$email','$prodid','$qty','0','')";
		$result = mysqli_query($conn,$sql);
		if ($result) {
			echo "1";
		} else {
			echo "0";
		} 

	}
	

?>