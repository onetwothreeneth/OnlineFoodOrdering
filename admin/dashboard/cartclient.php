<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=ISO-8859-1");

include "dbconn.php";

$id = $_GET['id'];

$sql ="SELECT cart.id , cart.prod_id, cart.qty, products.name, products.price, products.description, products.image from cart INNER JOIN products on products.id=cart.prod_id where cart.cust_email='$id'"; 
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
$outp ='{"ccart":['.$outp.']}';
$conn->close();  
echo($outp);
?>

