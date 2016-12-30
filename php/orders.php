<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=ISO-8859-1");

include "dbconn.php";
session_start();
$email = $_SESSION['email'];

$sql ="SELECT * FROM cart_orders where cust_email='$email' and status <=3 ORDER BY id DESC";
$result = mysqli_query($conn,$sql); 
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",'; 
    $outp .= '"order_id":"'  . $rs["order_id"] . '",'; 
    $outp .= '"cust_email":"'  . $rs["cust_email"] . '",'; 
    $outp .= '"date":"'  . $rs["date"] . '",'; 
    $outp .= '"total":"'  . $rs["total"] . '",';  
    $outp .= '"status":"'. $rs["status"]     . '"}'; 
}
$outp ='{"orders":['.$outp.']}';
$conn->close();  
echo($outp);
?>

