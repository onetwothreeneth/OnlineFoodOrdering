<?php

include "dbconn.php";

  $sql = "SELECT * FROM notifications ORDER BY id DESC";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result)){

      $id = $row['id'];
      $name = $row['name'];
      $date = $row['date'];
      $action = $row['action'];

            echo "<div class='notif-bar animated bounceInDown'>
                      <p class='name'><i class='fa fa-bell'></i> $name</p>
                      <p class='time'>$date</p>
                      <p class='notifs'>$action</p>
                  </div>";

   }
?>
