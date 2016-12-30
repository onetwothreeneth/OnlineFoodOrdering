<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=ISO-8859-1");

include "dbconn.php";

$sql ="SELECT * FROM products"; 
$result = mysqli_query($conn,$sql); 
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",'; 
    $outp .= '"name":"'  . $rs["name"] . '",'; 
    $outp .= '"category":"'  . $rs["category"] . '",'; 
    $outp .= '"description":"'  . $rs["description"] . '",'; 
    $outp .= '"price":"'  . $rs["price"] . '",'; 
    $outp .= '"image":"'  . $rs["image"] . '",'; 
    $outp .= '"status":"'. $rs["status"]     . '"}'; 
}
$outp ='{"products":['.$outp.']}';
$conn->close();  
echo($outp);
?>