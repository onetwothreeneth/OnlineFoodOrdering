<?php

include "dbconn.php";
$id = $_POST['id'];


     $sql = "DELETE FROM products WHERE id='$id'";
     $result = mysqli_query($conn,$sql);
            if($result){
                echo "yes";
            } else {
                echo "Something Went Wrong";
            }

?>
