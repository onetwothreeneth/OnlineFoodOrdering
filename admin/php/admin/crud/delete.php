<?php

include "dbconn.php";
$id = $_POST['id'];


     $sql = "DELETE FROM products WHERE id='$id'";
     $result = mysqli_query($conn,$sql);
            if($result){
                header("location:http://localhost/OnlineFoodOrdering-master/admin/dashboard");
            } else {
                echo "Something Went Wrong";
            }

?>
