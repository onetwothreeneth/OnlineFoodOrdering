<?php
include 'dbconn.php';

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];
$image = $_FILES['image']['name'];

      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type= $_FILES['image']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      if(move_uploaded_file($file_tmp,"../../../img/uploads/".$file_name)){

         $sql1 = "SELECT * FROM products where name='$name' and price='$price' ";
         $result1 = mysqli_query($conn,$sql1);
         $row1 = mysqli_num_rows($result1);
             if($row1<='0'){

                   $sql = "INSERT INTO products (name, category, description, price, image, status) values('$name','$category','$description','$price','$file_name','available')";
                   $result = mysqli_query($conn,$sql);

                      if($result){
                          echo "adicionado com sucesso";
                      } else {
                          echo "Alguma coisa deu errado";
                      }
             } else {

                   echo "Esse Produto j? existe";

             }


      } else {
         echo "Erro";
      }
?>
