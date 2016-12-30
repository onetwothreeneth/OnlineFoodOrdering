<?php
session_start();
$admin = $_SESSION['admin'];
if(isset($admin)){} else { header('location:login'); }
?>
<!Doctype html>
<html>
	<head>
		<title>Conchos Sisig</title>
		<link rel="icon" href="img/logo.png">

		<!-- CUSTOM JS/CSS -->
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
		<meta name="viewport" content="device-width=initial-scale 1.0;">

		<!-- FLAT UI JS/CSS -->
		<link rel="stylesheet" type="text/css" href="../Ui/dist/css/flat-ui.css">
		<link rel="stylesheet" type="text/css" href="../Ui/dist/css/flat-ui.min.css">
		<link rel="stylesheet" type="text/css" href="../Ui/dist/css/flat-ui.css.map">
		<link rel="stylesheet" type="text/css" href="../Ui/dist/css/vendor/bootstrap/css/bootstrap.min.css">
		<script type="text/javascript" src="../Ui/dist/js/flat-ui.js"></script>

		<!-- Font awesome -->
		<link rel="stylesheet" type="text/css" href="../fonts/css/font-awesome.css">


		<!-- Animate -->
		<link rel="stylesheet" type="text/css" href="../css/animate.css">

		<!-- JQUERY -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/dashboard.js"></script>
		<script type="text/javascript" src="../js/drop.js"></script>

		<!-- Menu Ajax -->
		<script type="text/javascript" src="../js/admin-ajax/menu.js"></script>
		<script type="text/javascript" src="../js/admin-ajax/form-ajax.js"></script>
		<script type="text/javascript" src="../js/form_jquery.js"></script>

		</script>
	</head>

	<body>

		<!-- Start of Container -->
		<div class="container">
		<!-- Start of header-->
        <div class="header">
                        <div class="left">
                            <i class="fa fa-spoon"></i><i class="fa fa-spoon"></i> Concho's Sisig
                        </div>
                        <div class="left2">
                            <i id="burgermenu" class="fa fa-bars" alt="1"></i>
                        </div>
                        <div class="right">
                            <div class="box">
                                Welcome Admin <a href="out.php"><i class="fa fa-gear" style="color:white !important;"></i></a>
                            </div>
                        </div>
                        <div class="right2">
                            <div class="box">
                                <i class="fa fa-gear"></i>
                            </div>
                        </div>
        </div>
    	<!-- End of header-->
    	<!-- Start of sidebar-->
    	<div class="sidebar">
    		<div class="menu" id="a_notifications">
    			<div class="icon active">
    				<i class="fa fa-bell"></i>
    			</div>
    			<div class="name active2">
    				Notifications <!--<kbd style="background-color:#e74c3c;">31</kbd>-->
    			</div>
    		</div>
    		<div class="menu" id="a_products">
    			<div class="icon">
    				<i class="fa fa-spoon"></i>
    			</div>
    			<div class="name">
    				Products
    			</div>
    		</div>
    		<div class="menu" id="a_orders">
    			<div class="icon">
    				<i class="fa fa-cloud"></i>
    			</div>
    			<div class="name">
    				Orders  
    			</div>
    		</div>
    		<div class="menu" id="a_sales">
    			<div class="icon">
    				<i class="fa fa-bar-chart"></i>
    			</div>
    			<div class="name">
    				Sales Report
    			</div>
    		</div>
    		<div class="menu" id="a_messages">
    			<div class="icon">
    				<i class="fa fa-envelope"></i>
    			</div>
    			<div class="name">
    				Messages  
    			</div>
    		</div>
    		<div class="menu" id="a_accounts">
    			<div class="icon">
    				<i class="fa fa-users"></i>
    			</div>
    			<div class="name">
    				Accounts  
    			</div>
    		</div>
    	</div>
        <!-- End of sidebar-->
    	<!-- Start of Content-->
    	<div class="content">
          Kenneh abenojar
    	</div>
        <!-- End of Content-->

        <!-- Start of footer-->
        <div class="footer">
            Copyright &copy 2016 - Concho's Sisis Admin Dashboard
        </div>
        <!-- End of footer-->



    		<!-- Start of header-->
        <!-- End of header-->
		</div>
		<!-- End of Container -->
	</body>
</html>


<!-- Start of add product-->
<div class="add_products animated bounce">
		<div class="header-title">
			 <h4> <i class="fa fa-plus"></i> Add Product</h4>
			 <span><i class="fa fa-remove"></i></span>
		</div><br><br>
		<div class="animated shake" id="erorr">
		</div>
		<form id="addproduct" action="../php/admin/crud/add.php" method="post" enctype="multipart/form-data">
						<div class="img-cont">
								<img src="../img/images.jpg" alt="Upload Image" />

						</div>
						<div class="form-cont">
							  <input type="file" name="image" value="" id="add_image" required accept="image/png,image/jpg,image/jpeg,image/gif,image/	bitman" >
								<input type="text" name="name"  id="name" placeholder="Name" required="">
								<input type="number" name="price" id="price" placeholder="Price" required="">
								<select name="category" required="" id="category">
										<option value="Sisig">Sisig</option>
										<option value="Main-Meals">Main Meals</option>
										<option value="For Kids">For Kids</option>
										<option value="Desserts">Desserts</option>
										<option value="Drinks">Drinks</option>
										<option value="Extras">Extras</option>
								</select>
							 	<textarea name="description" id="description" rows="8" placeholder="Description" resizable></textarea>
								<button id="addprod-submit">Submit</button>
						</div>
			</form>
</div>
<!-- End of add product-->

<!-- Start of update product-->
<div class="add_products2 animated bounce" id="update-cont">
		<div class="header-title">
			 <h4> <i class="fa fa-plus"></i> Update Product</h4>
			 <span><i class="fa fa-remove"></i></span>
		</div><br><br>
		<div class="animated shake" id="erorr">
		</div>
		<div id="jafhioasbfaskldhasd"></div>
</div>
<!-- End of update product-->

					<!-- Start of PopUp-->
					<div class="popup animated bounceIn">
							<span>Delete ? </span>
							<hr>
							<button class="ok">Ok</button>
							<button class="cancel">Cancel</button>
					</div>
					<!-- End of PopUp-->




<!--

this might help

        <kbd style="background-color:red;">1</kbd>


-->
