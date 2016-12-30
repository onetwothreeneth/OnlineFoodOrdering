<?php

include "dbconn.php";

  $sql = "SELECT * FROM contact ORDER BY id DESC";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result)){

      $id = $row['id'];
      $date = $row['date'];
      $name = $row['name'];
      $contact = $row['contact'];
      $email = $row['email'];
      $message = $row['message'];

          echo "<div class='message-box animated bounceInLeft' style='background-color:#2c3e50 !important;'>
                  <div class='message-bar'>
                      <p class='name'><i class='fa fa-user'></i> $name</p>
                      <p class='email'>$email</p>
                      <p class='message'>$message</p>
                      <p class='date'>$date</p>
                  </div>
                  <div class='remove-msg'>
                      <i class='fa fa-remove' onclick='$(this).parent().parent().fadeOut();'></i>
                  </div>
              </div>";
  }

 ?>
