<?php 

$conn = mysqli_connect('localhost','root','');
$dbconn = mysqli_select_db($conn,'conchos_sisig');
$id = $_POST['id']; 

	$sql = "SELECT * FROM products where id='$id'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);

	  	  echo '<form id="mMJkwmKfa" action="../php/admin/crud/update.php" method="post" enctype="multipart/form-data">
						<div class="img-cont">
								<img src="../img/images.jpg" alt="Upload Image" />

						</div>
						<div class="form-cont">
								<input type="hidden" name="id" value="'.$row['id'].'">
								<input type="hidden" name="imgb" value="'.$row['id'].'">
								<input type="file" name="image" id="addimage" required accept="image/png,image/jpg,image/jpeg,image/gif,image/bitman" >
								<input type="text" name="name"  id="name" value="'.$row['name'].'" required="">
								<input type="number" name="price" id="price" value="'.$row['price'].'" required="">
								<select name="category" required="" id="category">
										<option value="'.$row['category'].'">'.$row['category'].'</option>
										<option value="Main-Meals">Main Meals</option>
										<option value="For Kids">For Kids</option>
										<option value="Desserts">Desserts</option>
										<option value="Drinks">Drinks</option>
										<option value="Extras">Extras</option>
								</select>
								<textarea name="description" id="description" rows="8" value="'.$row['description'].'" resizable>'.$row['description'].'</textarea>
								<button id="addprod-submit">Submit</button>
						</div>
				</form>';

?>
<script type="text/javascript" src="form_jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#mMJkwmKfa").ajaxForm(function(data){
			if(data=='yes'){
				$('.add_products2').fadeOut("fast",function(){
				$('.container').animate({'opacity': '1'});
				$('.content').css({'opacity': '1'});
				$('.sidebar').css({'opacity': '1'});
				$('.header').css({'opacity': '1'});
				alert('Success');
                $('.content').load('../php/admin/category/products.php');
		});
			} else {	
				alert(data);
			}
		});
	});
				function readURL(input) {
						if (input.files && input.files[0]) {
								var reader = new FileReader();

								reader.onload = function (e) {
										$('.img-cont img').attr('src', e.target.result);
								}

								reader.readAsDataURL(input.files[0]);
						}
				}

				$("#addimage").change(function () {
						readURL(this);
				});
</script>