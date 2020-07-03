<?php

include "dbconn.php";

  echo "<select name='' class='prodcat-btn' id='filter'>
            <option value='All'>All</option>
            <option value='Sisig'>Sisig</option>
            <option value='Main-Meals'>Main Meals</option>
            <option value='For-Kids'>For Kids</option>
            <option value='Desserts'>Desserts</option>
            <option value='Drinks'>Drinks</option>
            <option value='Extras'>Extras</option>
        </select>";
  echo "<button id='add' class='addprod-btn'>Adiconar Produto</button>";
  echo "<script src='../js/dashboard.js'></script>";
  echo "<script src='../js/admin-ajax/form-ajax.js'></script>";
  echo "<div class='product-container'>";

  $sql = "SELECT * FROM products ORDER BY name ASC";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result)){

      $id = $row['id'];
      $name = $row['name'];
      $category = $row['category'];
      $description = $row['description'];
      $price = $row['price'];
      $image = $row['image'];
      $status = $row['status'];

          if($status==='available'){

                  echo "<div class='item animated fadeInDowns' id='$category'>
                            <img src='../img/uploads/$image' width='10%;'>
                            <p class='name'>$name <kbd style='background-color:#e74c3c;'>R$$price</kbd></p>
                            <!--<p class='desc'>$description</p>-->
                            <center>
                                <button class='update' id='update-prod' alt='$id'>Editar</button>
                                <form id='unable' action='../php/admin/crud/availability.php' method='post' style='display:inline !important;'>
                                    <input type='hidden' name='status' value='$status'>
                                    <input type='hidden' name='id' value='$id'>
                                    <button class='not'>desativar</button>
                                </form>
                                
                            </center>
                        </div>";

          } else {
                  echo "<div class='item animated fadeInDowns' id='$category'>
                            <img src='../img/uploads/$image' width='10%;'>
                            <p class='name'>$name <kbd style='background-color:#e74c3c;'>P$price</kbd></p>
                            <!--<p class='desc'>$description</p>-->
                            <center>
                                <button class='update' id='update-prod'>Update</button>
                                <form id='able' action='../php/admin/crud/availability.php' method='post' style='display:inline !important;'>
                                    <input type='hidden' name='status' value='$status'>
                                    <input type='hidden' name='id' value='$id'>
                                    <button class='not' style='background-color:#ea6052;'>Ativar</button>
                                </form>
                                
                            </center>
                        </div>";


          }

  }

  echo "</div>";

?>
