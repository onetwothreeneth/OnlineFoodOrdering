<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=ISO-8859-1");

include "dbconn.php";
session_start();
$email = $_SESSION['email'];

$sql ="SELECT  sum(products.price * cart.qty) as total from cart INNER JOIN products on products.id=cart.prod_id where cart.cust_email='$email' and cart.status='0'";
$result = mysqli_query($conn,$sql); 
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";} 
    $outp .= '{"total":"'. $rs["total"]     . '"}'; 
}
$outp ='{"totalcart":['.$outp.']}';
$conn->close();  
echo($outp);
?>

 
