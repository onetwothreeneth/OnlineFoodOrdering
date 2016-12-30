<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=ISO-8859-1");

include "dbconn.php";
session_start();
$email = $_SESSION['email'];

$sql ="SELECT cart.id , cart.prod_id, cart.qty, products.name, products.price, products.description, products.image from cart INNER JOIN products on products.id=cart.prod_id where cart.cust_email='$email' and cart.status='0'"; 
$result = mysqli_query($conn,$sql); 
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",'; 
    $outp .= '"prod_id":"'  . $rs["prod_id"] . '",'; 
    $outp .= '"name":"'  . $rs["name"] . '",'; 
    $outp .= '"qty":"'  . $rs["qty"] . '",'; 
    $outp .= '"description":"'  . $rs["description"] . '",'; 
    $outp .= '"price":"'  . $rs["price"] . '",';  
    $outp .= '"image":"'. $rs["image"]     . '"}'; 
}
$outp ='{"mycart":['.$outp.']}';
$conn->close();  
echo($outp);
?>

