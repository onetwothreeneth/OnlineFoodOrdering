<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=ISO-8859-1");

include "dbconn.php";
session_start();
$email = $_SESSION['email'];

$sql ="SELECT count(id) as count, id FROM messages where cust_email='$email' and status='0'"; 
$result = mysqli_query($conn,$sql); 
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    echo $rs['count'];
} 
$conn->close();   
?>