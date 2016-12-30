<?php

include "dbconn.php";
$id = $_POST['id'];
$status = $_POST['status'];

  if($status=='available'){
        $sql = "UPDATE products set status='unavailable' WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
            if($result){
                echo "yes";
            } else {
                echo "Something Went Wrong";
            }
  } else {
        $sql = "UPDATE products set status='available' WHERE id='$id'";
        $result = mysqli_query($conn,$sql);
            if($result){
                echo "yes";
            } else {
                echo "Something Went Wrong";
            }
  }

?>
