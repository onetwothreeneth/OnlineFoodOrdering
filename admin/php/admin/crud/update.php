<?php

$conn = mysqli_connect('localhost','root','');
$dbconn = mysqli_select_db($conn,'conchos_sisig');

$id = $_POST['id']; 
$name = $_POST['name']; 
$category = $_POST['category']; 
$description = $_POST['description']; 
$price = $_POST['price']; 
$imgb = $_POST['imgb']; 
$image = $_FILES['image']['name']; 

      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type= $_FILES['image']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      if(move_uploaded_file($file_tmp,"../../../img/uploads/".$file_name)){

         	$sql = "UPDATE products set name='$name',category='$category',description='$description',price='$price',image='$image' where id='$id'";
            $result = mysqli_query($conn,$sql);
				if($result){
                    echo "yes";
                } else {
                    echo "Something Went Wrong";
                }  
      } else {
         echo "Eror";
      }
?>
